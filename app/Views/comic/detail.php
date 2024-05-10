<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <!-- Component card horizontal bootstrap v4.5 -->
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $comic['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $comic['judul']; ?></h5>
                            <p class="card-text"><b>Penulis : </b><?= $comic['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $comic['penerbit']; ?></small></p>
                            <!-- componen button bootstrap v4.5 -->
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <!-- componen button bootstrap v4.5 -->
                            <br><br>
                            <a href="/comic/">Kembali Ke Daftar Comic</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Component card horizontal bootstrap v4.5 -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>