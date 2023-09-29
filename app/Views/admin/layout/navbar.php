    <!-- navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="admin">Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <div class="position-absolute top-10 end-0" style="margin-right: 1%;">
            <a href="#" class="text-decoration-none text-white">
                <i class="fas fa-user"></i> Halo, <?= ucfirst(session()->get('nama_admin')) ?>
            </a>
        </div>
    </nav>
    <!-- end navbar -->