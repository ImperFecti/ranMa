<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\LaporanModel;
use App\Models\SuperAdminModel;
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
        $data = [
            'title' => 'Admin Masjid | ranMa',
        ];

        return view('pages/admin/index', $data);
    }

    public function tableadmin()
    {
        $admin = $this->SuperAdminModel->findAll();

        $data = [
            'title' => 'Admin Masjid | ranMa',
            'admin' => $admin,
        ];
        return view('pages/admin/tableadmin', $data);
    }

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
