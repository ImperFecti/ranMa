<nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/codeigniter">ranMa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laporan">Laporan</a>
            </li>
        </ul>
        <span class="navbar-text mr-md-3">
            Website Laporan Keuangan Masjid Al-Hidayah
        </span>
        <ul class="navbar-nav mr-md-3">
            <?php if (logged_in()) : ?>
                <li class="nav-item">
                    <a class="button-24" href="/logout" role="button">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>