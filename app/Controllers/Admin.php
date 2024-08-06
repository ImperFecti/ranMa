<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanModel;
use App\Models\SuperAdminModel;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $laporanModel;
    protected $SuperAdminModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
        $this->SuperAdminModel = new SuperAdminModel();
    }

    public function index()
    {
        return view('pages/admin/index');
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
}
