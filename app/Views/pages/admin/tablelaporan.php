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
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Laporan Data Keuangan Masjid
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahLaporan">
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
                                        <td><?= esc($l['rincianmasuk']); ?></td>
                                        <td><?= esc($l['rinciankeluar']); ?></td>
                                        <td>
                                            <form action="<?= base_url('admin/deletelaporan'); ?>" method="post" style="display:inline;">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?= $l['id']; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data laporan ini ?');">Delete</button>
                                            </form>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUbahLaporan<?= $l['id']; ?>">
                                                Ubah
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <!-- Modal Ubah Laporan -->
                                    <div class="modal fade" id="modalUbahLaporan<?= $l['id']; ?>" tabindex="-1" aria-labelledby="modalUbahLaporanLabel<?= $l['id']; ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalUbahLaporanLabel<?= $l['id']; ?>">Ubah Laporan Keuangan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="<?= base_url('admin/updatelaporan'); ?>" method="post">
                                                    <div class="modal-body">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="id" value="<?= $l['id']; ?>">
                                                        <div class="mb-3">
                                                            <label for="masuk" class="form-label">Pemasukan</label>
                                                            <input type="text" class="form-control" id="masuk" name="masuk" value="<?= esc($l['masuk']); ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="keluar" class="form-label">Pengeluaran</label>
                                                            <input type="text" class="form-control" id="keluar" name="keluar" value="<?= esc($l['keluar']); ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="saldo" class="form-label">Saldo</label>
                                                            <input type="text" class="form-control" id="saldo" name="saldo" value="<?= esc($l['saldo']); ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="rincianmasuk" class="form-label">Rincian Pemasukan</label>
                                                            <textarea class="form-control" id="rincianmasuk" name="rincianmasuk" rows="3" required><?= esc($l['rincianmasuk']); ?></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="rinciankeluar" class="form-label">Rincian Pengeluaran</label>
                                                            <textarea class="form-control" id="rinciankeluar" name="rinciankeluar" rows="3" required><?= esc($l['rinciankeluar']); ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Ubah Laporan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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

<!-- Modal Tambah Laporan -->
<div class="modal fade" id="modalTambahLaporan" tabindex="-1" aria-labelledby="modalTambahLaporanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLaporanLabel">Tambah Laporan Keuangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/tambahlaporan'); ?>" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="masuk" class="form-label">Pemasukan</label>
                        <input type="text" class="form-control" id="masuk" name="masuk" required>
                    </div>
                    <div class="mb-3">
                        <label for="keluar" class="form-label">Pengeluaran</label>
                        <input type="text" class="form-control" id="keluar" name="keluar" required>
                    </div>
                    <div class="mb-3">
                        <label for="saldo" class="form-label">Saldo</label>
                        <input type="text" class="form-control" id="saldo" name="saldo" required>
                    </div>
                    <div class="mb-3">
                        <label for="rincianmasuk" class="form-label">Rincian Pemasukan</label>
                        <textarea class="form-control" id="rincianmasuk" name="rincianmasuk" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rinciankeluar" class="form-label">Rincian Pengeluaran</label>
                        <textarea class="form-control" id="rinciankeluar" name="rinciankeluar" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Laporan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- End of content section -->