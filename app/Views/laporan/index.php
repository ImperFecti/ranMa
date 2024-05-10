<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Laporan Keuangan</h1>
            <!-- tabel laporan keuangan -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Pengeluaran</th>
                        <th scope="col">Saldo</th>
                        <th scope="col">Rincian Pemasukan</th>
                        <th scope="col">Rincian Pengeluaran</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- perulangan menggunakan foreach untuk mengambil data di database masjid -->
                    <?php $i = 1; ?>
                    <?php foreach ($laporan as $l) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th><!-- perulangan untuk nomor data -->
                            <!-- perulangan untuk mengambil data keuangan di db masjid -->
                            <td><?= $l['tanggal']; ?></td>
                            <td>Rp.<?= $l['masuk']; ?></td>
                            <td>Rp.<?= $l['keluar']; ?></td>
                            <td>Rp.<?= $l['saldo']; ?></td>
                            <td><?= $l['rincianmasuk']; ?></td>
                            <td><?= $l['rinciankeluar']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>