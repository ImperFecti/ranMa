<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $allowedFields = ['masuk', 'keluar', 'saldo', 'rincianmasuk', 'rinciankeluar', 'tanggal'];
}
