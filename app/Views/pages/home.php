<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="hero fade-in">
    <main class="container-xl">
        <h1>Laporan Keuangan Masjid Al-Hidayah</h1>
        <h2>Selamat datang di website laporan keuangan Masjid Al-Hidayah.</h2>
        <br>
        <h5>Kami berkomitmen untuk menyediakan laporan keuangan yang transparan dan akurat, sehingga jamaah dapat memantau dan memahami penggunaan dana masjid dengan mudah. Laporan dapat diakses kapan saja dan di mana saja.</h5>
    </main>
</section>

<!-- home section start -->
<div class="container-lg fade-in" id="Home">
    <h2 style="text-align: center;">"Kami menyediakan akses mudah dan transparan untuk laporan keuangan masjid. Dengan beberapa klik, Anda dapat melihat laporan keuangan terbaru kapan saja dan di mana saja."</h2> <br>
    <hr>
    <table class="table table-hover table-borderless">
        <thead>
            <tr>
                <th class="text-center">
                    <h3>Keunggulan Website Ini:</h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Mudah Diakses <i class="bi bi-check-lg"></i></h5> Jamaah tidak perlu login atau register untuk melihat laporan keuangan masjid.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Transparan <i class="bi bi-check-lg"></i></h5> Laporan keuangan yang jelas dan terperinci untuk meningkatkan kepercayaan jamaah.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Up-to-date <i class="bi bi-check-lg"></i></h5> Informasi keuangan yang selalu diperbarui untuk memastikan data yang akurat.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>24/7 <i class="bi bi-check-lg"></i></h5> Akses laporan keuangan kapan saja, di mana saja.
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- FAQ Section -->
<div class="container-lg fade-in">
    <div class="faq-section">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">Apa saja kegiatan rutin yang diadakan di masjid?</button>
                <div class="faq-answer">
                    <p>Masjid kami mengadakan berbagai kegiatan rutin seperti shalat berjamaah lima waktu, pengajian, ceramah agama, TPA (Taman Pendidikan Al-Qur'an) untuk anak-anak, serta kajian untuk remaja dan dewasa.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Bagaimana cara memberikan donasi untuk masjid?</button>
                <div class="faq-answer">
                    <p>Anda dapat memberikan donasi langsung ke masjid atau melalui transfer bank ke rekening masjid. Informasi rekening bank dapat ditemukan di papan pengumuman atau dengan menghubungi salah satu pengurus masjid.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Apakah ada program khusus di bulan Ramadhan?</button>
                <div class="faq-answer">
                    <p>Ya, selama bulan Ramadhan, masjid kami menyelenggarakan berbagai kegiatan seperti buka puasa bersama, shalat tarawih, tadarus Al-Qur'an, dan sahur bersama. Informasi lebih lanjut akan diumumkan menjelang bulan Ramadhan.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Bagaimana cara menjadi anggota pengurus masjid?</button>
                <div class="faq-answer">
                    <p>Untuk menjadi anggota pengurus masjid, Anda dapat menghubungi ketua atau salah satu pengurus masjid. Proses seleksi dan persyaratan akan dijelaskan lebih lanjut oleh pengurus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home section end -->

<?= $this->endSection(); ?>