<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    //deklarasi contruct model laporan
    protected $laporanModel;
    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
    }

    public function index()
    {
        $laporan = $this->laporanModel->findAll();

        $data = [
            'title' => 'Laporan',
            'laporan' => $laporan
        ];


        return view('laporan/index', $data);
    }
}
