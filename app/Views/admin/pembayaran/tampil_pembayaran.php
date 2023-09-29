<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('konten'); ?>

<main class="mt-4">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">

                <h1 class="mb-3"><strong>Bukti Pembayaran</strong></h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>Daftar klien
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Nama Penyewa</th>
                                    <th>Atas Nama</th>
                                    <th>Nomor Rekening</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama Penyewa</th>
                                    <th>Atas Nama</th>
                                    <th>Nomor Rekening</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($bayar as $row) : ?>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $query_pembayaran = $db->table('pembayaran')
                                        ->select('pembayaran.id_pembayaran, user.id_user, user.nama_user')
                                        ->join('user', 'pembayaran.id_user=user.id_user')
                                        ->where('pembayaran.id_pembayaran', $row['id_pembayaran'])
                                        ->get()
                                        ->getRow();
                                    ?>
                                    <tr>
                                        <td><?= esc($query_pembayaran->nama_user) ?></td>
                                        <td><?= $row['an_pembayaran']; ?></td>
                                        <td><?= $row['norek_pembayaran']; ?></td>
                                        <td><?= $row['total_harga']; ?></td>
                                        <td><?= $row['tanggal_pembayaran']; ?></td>
                                        <td>
                                            <img src="/self-assets/bukti-pembayaran/<?= $row['bukti_pembayaran']; ?>" width="200px">
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