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
                <h1 class="mt-4">Data Akun Admin</h1>
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
                                Manajemen Akun Administrator Masjid
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                    Tambah Admin
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($admin as $a) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= esc($a['username']); ?></td>
                                        <td><?= esc($a['email']); ?></td>
                                        <td><?= ($a['active'] == 1) ? 'Aktif' : 'Tidak Aktif'; ?></td>
                                        <td>
                                            <form action="<?= base_url('admin/deleteadmin'); ?>" method="post" style="display:inline;">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?= $a['id']; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus admin ini ?');">Delete</button>
                                            </form>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editAdminModal<?= $a['id'] ?>">
                                                Ubah
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Edit User Modal -->
                                    <div class="modal fade" id="editAdminModal<?= $a['id']; ?>" tabindex="-1" aria-labelledby="editAdminModalLabel<?= $a['id']; ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="<?= site_url('admin/updateadmin/' . $a['id']); ?>" method="post">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editAdminModalLabel<?= $a['id']; ?>">Ubah Data User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="username<?= $a['id']; ?>" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="username<?= $a['id']; ?>" name="username" value="<?= $a['username']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email<?= $a['id']; ?>" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email<?= $a['id']; ?>" name="email" value="<?= $a['email']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="active<?= $a['id']; ?>" class="form-label">Status</label>
                                                            <select class="form-select" id="active<?= $a['id']; ?>" name="active" required>
                                                                <option value="1" <?= ($a['active'] == 1) ? 'selected' : ''; ?>>Aktif</option>
                                                                <option value="0" <?= ($a['active'] == 0) ? 'selected' : ''; ?>>Tidak Aktif</option>
                                                            </select>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                </form>
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

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= site_url('admin/tambahadmin') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Tambah User Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- End of content section -->