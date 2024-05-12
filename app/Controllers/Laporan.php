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

    public function create()
    {
        $data = [
            'title' => 'CI4APP | Tambah Data'
        ];
        return view('laporan/create', $data);
    }

    public function save()
    {
        $this->laporanModel->save([
            'masuk' => $this->request->getVar('masuk'),
            'keluar' => $this->request->getVar('keluar'),
            'saldo' => $this->request->getVar('saldo'),
            'rincianmasuk' => $this->request->getVar('rincianmasuk'),
            'rinciankeluar' => $this->request->getVar('rinciankeluar'),
            'tanggal' => $this->request->getVar('tanggal')
        ]);

        return redirect()->to('/laporan');
    }
}
