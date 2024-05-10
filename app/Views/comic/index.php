<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komik</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- perulangan menggunakan foreach untuk mengambil data di database comic -->
                    <?php $i = 1; ?>
                    <?php foreach ($comic as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th> <!-- perulangan untuk nomor data -->
                            <!-- perulangan untuk mengambil data comic -->
                            <td><img src="/img/<?= $c['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $c['judul']; ?></td>
                            <td>
                                <a href="/comic/<?= $c['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>