<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('konten'); ?>

<!-- konten -->
<main class="mb-4">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <div class="row mt-4">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4 rounded-0">
                            <div class="card-header">Data Lahan</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-chart-area"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $query = $db->table('lahan')->countAllResults();
                                $totalRows = $query;
                                ?>
                                <strong><?= $totalRows ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/Lahan/daftar_lahan">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4 rounded-0">
                            <div class="card-header">Data User</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-book-open"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $query = $db->table('user')->countAllResults();
                                $totalRows = $query;
                                ?>
                                <strong><?= $totalRows ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4 rounded-0">
                            <div class="card-header">Data Sewa</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-user"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $query = $db->table('penyewaan')->countAllResults();
                                $totalRows = $query;
                                ?>
                                <strong><?= $totalRows ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/Penyewaan/tampil_penyewaan">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4 rounded-0">
                            <div class="card-header">Data Pembayaran</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-table"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $query = $db->table('pembayaran')->countAllResults();
                                $totalRows = $query;
                                ?>
                                <strong><?= $totalRows ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/Pembayaran/tampil_pembayaran">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Lahan
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Gambar Lahan</th>
                                    <th>Fasilitas Lahan</th>
                                    <th>Luas Lahan</th>
                                    <th>Kategori Lahan</th>
                                    <th>Harga Lahan</th>
                                    <th>Status Lahan</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Gambar Lahan</th>
                                    <th>Fasilitas Lahan</th>
                                    <th>Luas Lahan</th>
                                    <th>Kategori Lahan</th>
                                    <th>Status Lahan</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $db = \Config\Database::connect();
                                $builder = $db->table('lahan');
                                $builder->orderBy('id_lahan', 'ASC');
                                $query = $builder->get();
                                $hasil = $query->getResult();
                                ?>

                                <?php foreach ($hasil as $row) : ?>
                                    <tr>
                                        <td>
                                            <img src="/self-assets/gambar-lahan/<?= $row->gambar_lahan; ?>" class="img-fluid" style="width:150px;">
                                        </td>
                                        <td><?= $row->fasilitas_lahan; ?></td>
                                        <td><?= $row->luas_lahan; ?></td>
                                        <td><?= $row->kategori_lahan; ?></td>
                                        <td>Rp. <?= number_format($row->harga_lahan); ?></td>
                                        <td><?= $row->status_lahan == 1 ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- konten -->

<?php $this->endSection(); ?>