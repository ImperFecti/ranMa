<!-- import layout template -->
<?= $this->extend('layout/admin/template'); ?>

<!-- Declare content section -->
<?= $this->section('content'); ?>
<div id="layoutSidenav">

    <!-- include the sidenav admin layout -->
    <?= $this->include('layout/admin/sidenav'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Keuangan Masjid Al-Hidayah</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Laporan Data Keuangan Masjid
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">
                                    Tambah Laporan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Pemasukan</th>
                                    <th>Pengeluaran</th>
                                    <th>Saldo</th>
                                    <th>Rincian Pemasukan</th>
                                    <th>Rincian Pengeluaran</th>
                                    <th>Action</th>
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
                                            <button class="btn btn-link toggle-detail" data-toggle="modal" data-target="#rincianPemasukan<?= $i ?>">Lihat Rincian Pemasukan</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-link toggle-detail" data-toggle="modal" data-target="#rincianPengeluaran<?= $i ?>">Lihat Rincian Pengeluaran</button>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                            <button type="button" class="btn btn-warning btn-sm">
                                                Ubah
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Rincian Pemasukan -->
                                    <div class="modal fade" id="rincianPemasukan<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="rincianPemasukanLabel<?= $i ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
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
                                        <div class="modal-dialog" role="document">
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
                </div>
            </div>
        </main>

        <!-- include the admin footer layout -->
        <?= $this->include('layout/admin/footer'); ?>

    </div>
</div>
<?= $this->endSection(); ?>
<!-- End of content section -->