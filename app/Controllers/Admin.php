<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\LaporanModel;
use Myth\Auth\Password;
use Myth\Auth\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $laporanModel;
    protected $AdminModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        $auth = service('authentication');
        if (!$auth->isLoggedIn()) {
            return redirect()->to('/login');
        }

        $adminId = $auth->id();
        $adminModel = new AdminModel();
        $admin = $adminModel->find($adminId);

        $data = [
            'title' => 'Admin Masjid | ranMa',
            'admin' => $admin,
        ];

        return view('pages/admin/index', $data);
    }

    public function ubahpassword()
    {
        $auth = service('authentication');
        $id = $auth->id();

        $admin = $this->AdminModel->find($id);

        $data = [
            'title' => 'Ubah Password | ranMa',
            'admin' => $admin,
        ];

        return view('pages/admin/ubahpassword', $data);
    }

    public function updatepassword($id)
    {
        // Validation rules
        $rules = [
            'password' => 'required|min_length[8]',
            'new_password' => 'required|min_length[8]',
            'password_confirm' => 'matches[new_password]',
        ];

        // Validate input
        if (!$this->validate($rules)) {
            return redirect()->to('/ubahpassword')->withInput()->with('validation', $this->validator);
        }

        // Get current user ID
        $userModel = new UserModel();
        $admin = $userModel->find($id);
        $currentPassword = $this->request->getVar('password');

        // Verify current password
        if (!Password::verify($currentPassword, $admin->password_hash)) {
            return redirect()->to('/ubahpassword')->with('error', 'Password lama salah.');
        }

        // Update password
        $newPassword = Password::hash($this->request->getVar('new_password')); // Hash new password
        $userModel->update($id, ['password_hash' => $newPassword]); // Update password ($id, ['password_hash' => $newPassword]);

        session()->setFlashdata('success', 'Password berhasil diubah.');
        return redirect()->to('/ubahpassword')->with('success', 'Password berhasil diubah.');
    }

    // TABLE ADMIN (ROLE SUPERADMIN)
    public function tableadmin()
    {
        $auth = service('authentication');
        $id = $auth->id();

        $admin = $this->AdminModel->getAdminUsers($id);

        $data = [
            'title' => 'Admin Masjid | ranMa',
            'admin' => $admin,
        ];
        return view('pages/admin/tableadmin', $data);
    }

    public function tambahadmin()
    {
        $authorize = service('authorization'); // Call authorization service

        $data = [
            'username' => esc($this->request->getPost('username')), // Get username input
            'email' => esc($this->request->getPost('email')), // Get email input
            'password_hash' => esc(Password::hash($this->request->getPost('password'))), // Hash password
            'active' => esc(1), // Set user as active by default
        ];

        // Insert user and get the user ID
        $adminModel = new AdminModel();
        $adminId = $adminModel->insert($data, true); // The second parameter 'true' returns the insert ID

        // Assign default user group
        if ($adminId) {
            $authorize->addUserToGroup($adminId, config('Auth')->defaultUserGroup);
        }

        return redirect()->to('/tableadmin')->with('message', 'User successfully added.'); // Redirect with success message
    }

    public function updateadmin($id)
    {
        $data = [
            'email' => esc($this->request->getPost('email')), // Get email input
            'username' => esc($this->request->getPost('username')), // Get username input
            'active' => esc($this->request->getPost('active')), // Get active input
        ];

        $this->AdminModel->update($id, $data); // Update user data
        return redirect()->to('/tableadmin')->with('message', 'Data Admin berhasil diubah.');
    }

    public function deleteadmin()
    {
        $id = $this->request->getPost('id');
        $data_admin = $this->AdminModel->find($id);

        if ($data_admin) {
            $this->AdminModel->delete($id);
            return redirect()->to('/tableadmin')->with('message', 'Admin berhasil dihapus.');
        } else {
            return redirect()->to('/tableadmin')->with('message', 'Admin tidak ditemukan.');
        }
    }

    // TABLE LAPORAN KEUANGAN (ROLE ADMIN)
    public function tablelaporan()
    {
        $laporan = $this->laporanModel->findAll();

        $data = [
            'title' => 'Laporan Keuangan Masjid | ranMa',
            'laporan' => $laporan,
        ];
        return view('pages/admin/tablelaporan', $data);
    }

    public function tambahlaporan()
    {
        $this->laporanModel->save([
            'masuk' => esc($this->request->getVar('masuk')),
            'keluar' => esc($this->request->getVar('keluar')),
            'saldo' => esc($this->request->getVar('saldo')),
            'rincianmasuk' => esc($this->request->getVar('rincianmasuk')),
            'rinciankeluar' => esc($this->request->getVar('rinciankeluar')),
        ]);

        return redirect()->to('/tablelaporan')->with('message', 'Laporan berhasil ditambahkan.');
    }

    public function updatelaporan()
    {
        $id = $this->request->getVar('id');

        $this->laporanModel->update($id, [
            'masuk' => esc($this->request->getVar('masuk')),
            'keluar' => esc($this->request->getVar('keluar')),
            'saldo' => esc($this->request->getVar('saldo')),
            'rincianmasuk' => esc($this->request->getVar('rincianmasuk')),
            'rinciankeluar' => esc($this->request->getVar('rinciankeluar')),
        ]);

        return redirect()->to('/tablelaporan')->with('message', 'Laporan berhasil diubah.');
    }

    public function deletelaporan()
    {
        $id = $this->request->getPost('id');
        $data_laporan = $this->laporanModel->find($id);

        if ($data_laporan) {
            $this->laporanModel->delete($id);
            return redirect()->to('/tablelaporan')->with('message', 'Laporan berhasil dihapus.');
        } else {
            return redirect()->to('/tablelaporan')->with('message', 'Laporan tidak ditemukan.');
        }
    }
}
