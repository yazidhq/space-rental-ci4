<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('konten'); ?>

<main class="mt-4">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">

                <h1 class="mb-3"><strong>Daftar Klien Penyewaan</strong></h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>Daftar klien
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Nama Penyewa</th>
                                    <th>Kategori Lahan</th>
                                    <th>Id Lahan</th>
                                    <th>Tanggal Penyewaan</th>
                                    <th>Lama Penyewaan</th>
                                    <th>NPWP</th>
                                    <th>KTP</th>
                                    <th>Status Penyewaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama Penyewa</th>
                                    <th>Kategori Lahan</th>
                                    <th>Id Lahan</th>
                                    <th>Tanggal Penyewaan</th>
                                    <th>Lama Penyewaan</th>
                                    <th>NPWP</th>
                                    <th>KTP</th>
                                    <th>Status Penyewaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($sewa as $row) : ?>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $query_penyewaan = $db->table('penyewaan')
                                        ->select('penyewaan.id_penyewaan, user.id_user, user.nama_user')
                                        ->join('user', 'penyewaan.id_user=user.id_user')
                                        ->where('penyewaan.id_penyewaan', $row['id_penyewaan'])
                                        ->get()
                                        ->getRow();
                                    ?>
                                    <tr>
                                        <td><?= esc($query_penyewaan->nama_user) ?></td>
                                        <td><?= $row['kategori_lahan']; ?></td>
                                        <td><?= $row['id_lahan']; ?></td>
                                        <td><?= $row['tanggal_penyewaan']; ?></td>
                                        <td><?= $row['lama_penyewaan']; ?></td>
                                        <td>
                                            <img src="/self-assets/lampiran-sewa/<?= $row['npwp']; ?>" width="200px">
                                        </td>
                                        <td>
                                            <img src="/self-assets/lampiran-sewa/<?= $row['ktp']; ?>" width="200px">
                                        </td>
                                        <td><?= $row['status_penyewaan']; ?></td>
                                        <td>
                                            <?php if ($row['status_penyewaan'] == "Sudah Bayar") : ?>
                                                <div class="d-grid gap-2">
                                                    <a class="btn btn-primary btn-sm" href="/Penyewaan/terima_sewa/<?= $row['id_penyewaan']; ?>" role="button">Terima Sewa</a>
                                                    <a class="btn btn-warning btn-sm" href="/Penyewaan/tolak_sewa/<?= $row['id_penyewaan']; ?>" role="button">Tolak Sewa</a>
                                                </div>
                                            <?php elseif ($row['status_penyewaan'] == "Belum Bayar") : ?>
                                                <p>Mengunggu Pembayaran</p>
                                            <?php elseif ($row['status_penyewaan'] == "Pesanan Diterima") : ?>
                                                <p>Pesanan Diterima</p>
                                            <?php elseif ($row['status_penyewaan'] == "Pesanan Ditolak") : ?>
                                                <p>Pesanan Ditolak</p>
                                            <?php endif ?>
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