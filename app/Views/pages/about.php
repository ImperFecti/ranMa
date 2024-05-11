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
    <br>
    <h2>Website Development Requirement</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Source Code</h5>
                    <p class="card-text">Source code website ini dapat dilihat dan di unduh di repository github. Bisa menggunakan pull request dari git bash untuk bisa mendapatkan source code website ini.</p>
                    <a href="https://github.com/ImperFecti/ci4" class="btn btn-primary">Repository Github</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Framework</h5>
                    <p class="card-text">Memilih framework CodeIgniter4 untuk pengembangan website karena kecepatan, keamanan, dan kemudahan penggunaannya yang mempercepat proses pengembangan.</p>
                    <a href="https://github.com/codeigniter4/CodeIgniter4" class="btn btn-primary">Repository Github</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">COMPOSER Dependency Manager for PHP</h5>
                    <p class="card-text">Composer digunakan sebagai manajer dependensi untuk website karena memungkinkan pengelolaan dan instalasi paket-paket PHP dengan mudah dan efisien.</p>
                    <a href="https://getcomposer.org/" class="btn btn-primary">Get Composer</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">XAMPP</h5>
                    <p class="card-text">XAMPP memungkinkan pengembang untuk dengan cepat membuat lingkungan pengembangan web lokal yang terintegrasi dengan Apache, MySQL, PHP, dan Perl, mempercepat proses pengembangan website.</p>
                    <a href="https://www.apachefriends.org/" class="btn btn-primary">Get XAMPP</a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>