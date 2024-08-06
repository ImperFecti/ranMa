<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="hero">
    <main class="container-xl">
        <h1>Laporan Keuangan Masjid Al-Hidayah</h1>
        <h2>Selamat datang di situs resmi laporan keuangan Masjid Al-Hidayah, Kota Bekasi.</h2>
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
                    <h5>Mudah Diakses</h5> Jamaah tidak perlu login atau register untuk melihat laporan keuangan masjid.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Transparan</h5> Laporan keuangan yang jelas dan terperinci untuk meningkatkan kepercayaan jamaah.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Up-to-date</h5> Informasi keuangan yang selalu diperbarui untuk memastikan data yang akurat.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>24/7</h5> Akses laporan keuangan kapan saja, di mana saja.
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- home section end -->

<?= $this->endSection(); ?>