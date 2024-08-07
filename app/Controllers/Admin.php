<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\LaporanModel;
use App\Models\SuperAdminModel;
use Myth\Auth\Password;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $laporanModel;
    protected $SuperAdminModel;
    protected $AdminModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
        $this->SuperAdminModel = new SuperAdminModel();
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

    // TABLE ADMIN (ROLE SUPERADMIN)
    public function tableadmin()
    {
        $auth = service('authentication');
        $id = $auth->id();

        $admin = $this->SuperAdminModel->getAdminUsers($id);

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
            'username' => $this->request->getPost('username'), // Get username input
            'email' => $this->request->getPost('email'), // Get email input
            'password_hash' => Password::hash($this->request->getPost('password')), // Hash password
            'active' => 1, // Set user as active by default
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
            'email' => $this->request->getPost('email'), // Get email input
            'username' => $this->request->getPost('username'), // Get username input
            'active' => $this->request->getPost('active'), // Get active input
        ];

        $this->AdminModel->update($id, $data); // Update user data
        return redirect()->to('/tableadmin')->with('message', 'Data Admin berhasil diubah.');
    }

    public function deleteadmin()
    {
        $id = $this->request->getPost('id');
        $data_admin = $this->SuperAdminModel->find($id);

        if ($data_admin) {
            $this->SuperAdminModel->delete($id);
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
            'masuk' => $this->request->getVar('masuk'),
            'keluar' => $this->request->getVar('keluar'),
            'saldo' => $this->request->getVar('saldo'),
            'rincianmasuk' => $this->request->getVar('rincianmasuk'),
            'rinciankeluar' => $this->request->getVar('rinciankeluar'),
        ]);

        return redirect()->to('/tablelaporan')->with('message', 'Laporan berhasil ditambahkan.');
    }

    public function updatelaporan()
    {
        $id = $this->request->getVar('id');

        $this->laporanModel->update($id, [
            'masuk' => $this->request->getVar('masuk'),
            'keluar' => $this->request->getVar('keluar'),
            'saldo' => $this->request->getVar('saldo'),
            'rincianmasuk' => $this->request->getVar('rincianmasuk'),
            'rinciankeluar' => $this->request->getVar('rinciankeluar'),
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
