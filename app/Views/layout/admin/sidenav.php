<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- Core Section Start -->
                <!-- Link to Home page -->
                <a class="nav-link" href="/">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                    Home Page
                </a>
                <!-- Link to Dashboard -->
                <a class="nav-link" href="/admin">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">User Management</div>


                <!-- Link to Data Admin page -->
                <?php if (in_groups("superadmin")) : ?>
                    <a class="nav-link" href="/tableadmin">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-person"></i></div>
                        Akun Admin
                    </a>
                <?php endif; ?>

                <!-- Link to Data Laporan page -->
                <a class="nav-link" href="/tablelaporan">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill"></i></div>
                    Laporan Keuangan
                </a>
                <!-- Core section end -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>