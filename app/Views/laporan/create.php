<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>From Tambah Data Laporan</h1>
            <form action="/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="masuk">Pemasukan</label>
                    <input type="text" class="form-control" id="masuk" name="masuk">
                </div>
                <div class="form-group">
                    <label for="keluar">Pengeluaran</label>
                    <input type="text" class="form-control" id="keluar" name="keluar">
                </div>
                <div class="form-group">
                    <label for="saldo">Saldo Total</label>
                    <input type="text" class="form-control" id="saldo" name="saldo">
                </div>
                <div class="form-group">
                    <label for="rincianmasuk">Rincian Pemasukan</label>
                    <input type="text" class="form-control" id="rincianmasuk" name="rincianmasuk">
                </div>
                <div class="form-group">
                    <label for="rinciankeluar">Rincian Pengeluaran</label>
                    <input type="text" class="form-control" id="rinciankeluar" name="rinciankeluar">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>