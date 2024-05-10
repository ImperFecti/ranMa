<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>About This Website</h1>
            <p class="lead">
                Kami telah mengembangkan sebuah website dengan tujuan utama untuk menampilkan laporan keuangan Masjid Al-Hidayah secara transparan kepada jamaah dan pihak yang berkepentingan.
            </p>
            <p>
                Untuk mencapai tujuan tersebut, kami memilih menggunakan framework CodeIgniter 4 versi 4.5.1 sebagai fondasi utama pengembangan. Instalasi framework dilakukan melalui Composer, sebuah alat manajemen paket untuk PHP, dengan XAMPP versi 8.2.12 sebagai server lokal yang mendukung pengembangan. Dalam proses pembangunan, kami memanfaatkan fitur Spark dari CodeIgniter 4 untuk mempercepat pengembangan dan manajemen proyek, menyediakan alat bantu seperti pembangkit kode (scaffolding) dan perintah CLI (Command Line Interface).
                <br><br>
                Fitur utama dari website ini adalah penyajian laporan keuangan yang rapi dan mudah dimengerti, kemudahan akses bagi pengguna untuk melihat laporan kapan pun diperlukan, dan keamanan data yang terjamin. Desain antarmuka pengguna (UI/UX) dirancang responsif agar dapat diakses dengan baik dari berbagai perangkat, dengan antarmuka pengguna yang intuitif dan mudah digunakan, memungkinkan pengguna untuk menavigasi laporan dengan lancar. Dengan semua fitur dan rincian ini, website kami dirancang untuk memberikan aksesibilitas dan transparansi dalam melihat laporan keuangan Masjid Al-Hidayah.
            </p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>