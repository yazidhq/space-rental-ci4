<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('konten'); ?>

<main class="mt-4">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">

                <h1 class="mb-3"><strong>Daftar Lahan</strong></h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        <a href="/Lahan/tambah_lahan" class="text-decoration-none">TAMBAH LAHAN</a>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Gambar Lahan</th>
                                    <th>Fasilitas Lahan</th>
                                    <th>Luas Lahan</th>
                                    <th>Kategori Lahan</th>
                                    <th>Status Lahan</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($lahan as $row) : ?>
                                    <tr>
                                        <td>
                                            <img src="/self-assets/gambar-lahan/<?= $row['gambar_lahan']; ?>" class="img-fluid" style="width:150px;">
                                        </td>
                                        <td><?= $row['fasilitas_lahan']; ?></td>
                                        <td><?= $row['luas_lahan']; ?></td>
                                        <td><?= $row['kategori_lahan']; ?></td>
                                        <td>Rp. <?= number_format($row['harga_lahan']); ?></td>
                                        <td><?= $row['status_lahan'] == 1 ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                        <td>
                                            <div class="d-grid gap-2">
                                                <a class="btn btn-primary btn-sm" href="/Lahan/edit_lahan/<?= $row['id_lahan']; ?>" role="button">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="/Lahan/hapus_lahan/<?= $row['id_lahan']; ?>" role="button">Hapus</a>
                                            </div>
                                        </td>
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

<?php $this->endSection(); ?>