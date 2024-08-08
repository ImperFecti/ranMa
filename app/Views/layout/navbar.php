<nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">ranMa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= (current_url() == base_url('/')) ? 'active' : '' ?>">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= (current_url() == base_url('/contact')) ? 'active' : '' ?>">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item <?= (current_url() == base_url('/laporan')) ? 'active' : '' ?>">
                <a class="nav-link" href="/laporan">Laporan</a>
            </li>
            <?php if (logged_in()) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/admin" role="button">Admin</a>
                </li>
            <?php endif; ?>
        </ul>
        <span class="navbar-text mr-md-3">
            Website Laporan Keuangan Masjid Al-Hidayah
        </span>
    </div>
</nav>