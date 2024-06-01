<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row fade-in">
        <div class="col m-4">
            <h1>About This Website</h1>
            <p class="lead couriernew">
                Kami telah mengembangkan sebuah website dengan tujuan utama untuk menampilkan laporan keuangan Masjid Al-Hidayah secara transparan kepada jamaah dan pihak yang berkepentingan.
            </p>
            <p class="text-justify">
                Untuk mencapai tujuan tersebut, kami memilih menggunakan framework CodeIgniter 4 versi 4.5.1 sebagai fondasi utama pengembangan. Instalasi framework dilakukan melalui Composer, sebuah alat manajemen paket untuk PHP, dengan XAMPP versi 8.2.12 sebagai server lokal yang mendukung pengembangan. Dalam proses pembangunan, kami memanfaatkan fitur Spark dari CodeIgniter 4 untuk mempercepat pengembangan dan manajemen proyek, menyediakan alat bantu seperti pembangkit kode (scaffolding) dan perintah CLI (Command Line Interface). Website kami juga menggunakan Myth:Auth sebagai template sistem login untuk admin. Ini memberikan kemudahan bagi admin untuk mengelola database ke platform. Dengan integrasi ini, kami memastikan bahwa aspek keamanan dan otorisasi data pengguna terjaga dengan baik, sesuai dengan standar terkini dalam pengembangan web.
                <br><br>
                Fitur utama dari website ini adalah penyajian laporan keuangan yang rapi dan mudah dimengerti, kemudahan akses bagi pengguna untuk melihat laporan kapan pun diperlukan, dan keamanan data yang terjamin. Desain antarmuka pengguna (UI/UX) dirancang responsif agar dapat diakses dengan baik dari berbagai perangkat, dengan antarmuka pengguna yang intuitif dan mudah digunakan, memungkinkan pengguna untuk menavigasi laporan dengan lancar. Dengan semua fitur dan rincian ini, website kami dirancang untuk memberikan aksesibilitas dan transparansi dalam melihat laporan keuangan Masjid Al-Hidayah.
            </p>
        </div>
    </div>
    <div class="m-4">
        <h2 class="fade-in delay-2 pb-3 text-center">Website Development Requirement</h2>
        <div class="row">
            <div class="col-sm-6 fade-in delay-3">
                <div class="card">
                    <div class="card-header text-center gillsans">
                        ranMa Source Code
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Github</h5>
                        <p class="card-text couriernew txtsh">Source code website ini dapat dilihat dan di unduh di repository github. Bisa menggunakan pull request dari git bash untuk bisa mendapatkan source code website ini.</p>
                        <a href="https://github.com/ImperFecti/ranMa" class="btn btn-primary">Repository Github</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 fade-in delay-4">
                <div class="card text-right">
                    <div class="card-header text-center gillsans">
                        Framework
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CodeIgniter 4</h5>
                        <p class="card-text couriernew txtsh">Memilih framework CodeIgniter4 untuk pengembangan website karena kecepatan, keamanan, dan kemudahan penggunaannya yang mempercepat proses pengembangan.</p>
                        <a href="https://codeigniter.com/user_guide/installation/installing_composer.html" class="btn btn-primary">How To Install</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 fade-in delay-5">
                <div class="card">
                    <div class="card-header text-center gillsans">
                        PHP Dependency Manager
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">COMPOSER</h5>
                        <p class="card-text couriernew txtsh">Composer digunakan sebagai manajer dependensi untuk website karena memungkinkan pengelolaan dan instalasi paket-paket PHP dengan mudah dan efisien.</p>
                        <a href="https://getcomposer.org/" class="btn btn-primary">Get Composer</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 fade-in delay-6">
                <div class="card text-right">
                    <div class="card-header text-center gillsans">
                        Web Development
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">XAMPP</h5>
                        <p class="card-text couriernew txtsh">XAMPP memungkinkan pengembang untuk dengan cepat membuat lingkungan pengembangan web lokal yang terintegrasi dengan Apache, MySQL, PHP, dan Perl, mempercepat proses pengembangan website.</p>
                        <a href="https://www.apachefriends.org/" class="btn btn-primary">Get XAMPP</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card text-center fade-in delay-7">
            <div class="card-header gillsans">
                Login/Register System
            </div>
            <div class="card-body">
                <h5 class="card-title">Myth:Auth</h5>
                <p class="card-text couriernew txtsh">
                    Untuk mempermudah pembuatan sistem Login/Register adalah pilihan yang tepat untuk menggunakan library <b>Myth:Auth</b> sebagai template.
                    <br>
                    Dengan menggunakan library <b>Myth:Auth</b> dan sistem yang telah dirancang sedemikian rupa oleh <a href="https://github.com/lonnieezell/" class="text-decoration-none">Lonnie Ezell</a> perancang dari library <b>Myth:Auth</b> sekaligus orang yang ikut mendevelop framework <b>CodeIgniter4</b> ini.
                </p>
                <a href="https://github.com/lonnieezell/myth-auth" class="btn btn-primary">Repository Github</a>
            </div>
            <div class="card-footer text-muted">
                ranMa
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>