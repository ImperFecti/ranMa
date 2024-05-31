<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $laporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
    }

    public function index()
    {
        // method untuk sorting data tabel laporan keuangan
        $sortColumn = $this->request->getVar('sort') ?? 'tanggal';
        $sortOrder = $this->request->getVar('order') ?? 'asc';

        // Menambahkan validasi kolom yang diizinkan untuk diurutkan
        $allowedSortColumns = ['tanggal', 'masuk', 'keluar'];

        // Validasi kolom pengurutan
        if (!in_array($sortColumn, $allowedSortColumns)) {
            $sortColumn = 'tanggal';
        }

        // Mengambil data dari model dengan pengurutan
        $laporan = $this->laporanModel->orderBy($sortColumn, $sortOrder)->findAll();

        $data = [
            'title' => 'Laporan',
            'laporan' => $laporan,
            'sortColumn' => $sortColumn,
            'sortOrder' => $sortOrder
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

    // method untuk input data ke database
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
