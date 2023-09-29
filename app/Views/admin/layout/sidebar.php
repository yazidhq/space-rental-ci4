    <!-- sidebar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="/admin">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="/Lahan/daftar_lahan">
                            <div class="sb-nav-link-icon"><i class="bi bi-house-check"></i></i></div>Daftar Lahan
                        </a>
                        <a class="nav-link" href="/Penyewaan/tampil_penyewaan">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-bounding-box"></i></i></div>Klien Sewa
                        </a>
                        <a class="nav-link" href="/Pembayaran/tampil_pembayaran">
                            <div class="sb-nav-link-icon"><i class="bi bi-credit-card-2-front"></i></i></div>Pembayaran
                        </a>
                        <a class="nav-link" href="/User/tampil_user">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-check"></i></i></div>Data User
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <a class="max text-white" href="/AuthAdmin/logout_user">Logout</a><br>
                    <a class="max text-white" href="/">Halaman Utama</a>
                    <div class="small">Logged in as : <?= session()->get('nama_admin') ?></div>
                </div>
            </nav>
        </div>
    </div>
    <!-- end sidebar -->