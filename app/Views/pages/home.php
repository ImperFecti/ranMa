<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <!-- Jumbotron -->
            <div class="p-5 text-center bg-body-tertiary">
                <h1 class="mb-3">CI4APP</h1>
                <h4 class="mb-3">CI4App adalah sebuah website yang dirancang khusus untuk memudahkan pelaporan keuangan Masjid Al-Hidayah.</h4>
                <br>
                <p>Dengan CI4App, pengurus masjid dapat dengan mudah mencatat, melacak, dan melaporkan semua transaksi keuangan yang terkait dengan aktivitas masjid, termasuk penerimaan dan pengeluaran dana, donasi, dan pengelolaan keuangan lainnya. Platform ini menawarkan kemudahan dalam menghasilkan laporan keuangan yang akurat dan terperinci, sehingga memungkinkan pengurus masjid untuk mengelola keuangan mereka dengan lebih efisien dan transparan.</p>
                <a data-mdb-ripple-init class="btn btn-primary" href="/laporan" role="button">Lihat Laporan</a>
            </div>
            <!-- Jumbotron -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>