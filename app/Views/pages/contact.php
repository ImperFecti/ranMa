<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br>
<div class="container">
    <div class="card text-center fade-in delay-1">
        <div class="card-header">
            Lokasi Masjid
        </div>
        <div class="card-body">
            <h5 class="card-title">Masjid Al-Hidayah</h5>
            <p class="card-text">
                Jl. Pegangsaan Timur No. 123
                <br>
                RT 002/RW 011 17111
            </p>
            <p class="card-text"><b>Bekasi, Jawa Barat, Indonesia</b></p>
            <a href="#google-map-location-link" class="btn btn-primary">Google Maps</a>
            <a href="#whatsapp-contact-link" class="btn btn-success">Whatsapp</a>
        </div>
        <div class="card-footer text-muted">
            ranMa
        </div>
    </div>
    <br>
</div>

<?= $this->endSection(); ?>