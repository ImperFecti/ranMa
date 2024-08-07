<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- css datatable -->
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="/css/adminstyles.css" rel="stylesheet">

<div class="laporan-body">
    <h1 class="mt-2">Laporan Keuangan</h1>
    <!-- Header Tabel -->
    <table id="datatablesSimple">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">
                    Tanggal
                </th>
                <th scope="col">
                    Pemasukan
                </th>
                <th scope="col">
                    Pengeluaran
                </th>
                <th scope="col">Saldo</th>
                <th scope="col">Rincian Pemasukan</th>
                <th scope="col">Rincian Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($laporan as $l) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= esc($l['created_at']); ?></td>
                    <td>Rp.<?= esc($l['masuk']); ?></td>
                    <td>Rp.<?= esc($l['keluar']); ?></td>
                    <td>Rp.<?= esc($l['saldo']); ?></td>
                    <td>
                        <button class="btn btn-primary toggle-detail" data-toggle="modal" data-target="#rincianPemasukan<?= $i ?>">Lihat Rincian Pemasukan</button>
                    </td>
                    <td>
                        <button class="btn btn-primary toggle-detail" data-toggle="modal" data-target="#rincianPengeluaran<?= $i ?>">Lihat Rincian Pengeluaran</button>
                    </td>
                </tr>
                <!-- Modal Rincian Pemasukan -->
                <div class="modal fade" id="rincianPemasukan<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="rincianPemasukanLabel<?= $i ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rincianPemasukanLabel<?= $i ?>">Rincian Pemasukan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?= esc($l['rincianmasuk']); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Rincian Pengeluaran -->
                <div class="modal fade" id="rincianPengeluaran<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="rincianPengeluaranLabel<?= $i ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rincianPengeluaranLabel<?= $i ?>">Rincian Pengeluaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?= esc($l['rinciankeluar']); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- DataTables JS -->
<script src="/js/adminscripts.js"></script>

<?= $this->endSection(); ?>