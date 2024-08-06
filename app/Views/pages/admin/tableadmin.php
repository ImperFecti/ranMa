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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($admin as $value) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= esc($value['username']); ?></td>
                                        <td><?= esc($value['email']); ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                            <button type="button" class="btn btn-warning btn-sm">
                                                Ubah
                                            </button>
                                        </td>
                                    </tr>
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