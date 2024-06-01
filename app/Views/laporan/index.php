<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col m-4">
            <h1 class="mt-2">Laporan Keuangan</h1>
            <?php if (logged_in()) : ?>
                <a class="button-29 mb-3" href="/create" role="button">Tambah Data Laporan</a>
            <?php endif; ?>
            <!-- Header Tabel -->
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">
                            <a href="?sort=tanggal&order=<?= ($sortColumn == 'tanggal' && $sortOrder == 'asc') ? 'desc' : 'asc'; ?>">
                                Tanggal <?= ($sortColumn == 'tanggal') ? ($sortOrder == 'asc' ? '🡹' : '🡻') : ''; ?>
                            </a>
                        </th>
                        <th scope="col">
                            <a href="?sort=masuk&order=<?= ($sortColumn == 'masuk' && $sortOrder == 'asc') ? 'desc' : 'asc'; ?>">
                                Pemasukan <?= ($sortColumn == 'masuk') ? ($sortOrder == 'asc' ? '🡹' : '🡻') : ''; ?>
                            </a>
                        </th>
                        <th scope="col">
                            <a href="?sort=keluar&order=<?= ($sortColumn == 'keluar' && $sortOrder == 'asc') ? 'desc' : 'asc'; ?>">
                                Pengeluaran <?= ($sortColumn == 'keluar') ? ($sortOrder == 'asc' ? '🡹' : '🡻') : ''; ?>
                            </a>
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
                            <td><?= esc($l['tanggal']); ?></td>
                            <td>Rp.<?= esc($l['masuk']); ?></td>
                            <td>Rp.<?= esc($l['keluar']); ?></td>
                            <td>Rp.<?= esc($l['saldo']); ?></td>
                            <td>
                                <button class="btn btn-link toggle-detail" data-toggle="modal" data-target="#rincianPemasukan<?= $i ?>">Lihat Rincian Pemasukan</button>
                            </td>
                            <td>
                                <button class="btn btn-link toggle-detail" data-toggle="modal" data-target="#rincianPengeluaran<?= $i ?>">Lihat Rincian Pengeluaran</button>
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
<?= $this->endSection(); ?>