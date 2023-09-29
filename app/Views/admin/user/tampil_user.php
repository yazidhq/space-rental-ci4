<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('konten'); ?>

<main class="mt-4">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">

                <h1 class="mb-3"><strong>Data User</strong></h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>Daftar klien
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Nama User</th>
                                    <th>NIK</th>
                                    <th>Email</th>
                                    <th>WhatsApp</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama User</th>
                                    <th>NIK</th>
                                    <th>Email</th>
                                    <th>WhatsApp</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($user as $row) : ?>
                                    <tr>
                                        <td><?= $row['nama_user']; ?></td>
                                        <td><?= $row['nik_user']; ?></td>
                                        <td><?= $row['email_user']; ?></td>
                                        <td><?= $row['wa_user']; ?></td>
                                        <td><?= $row['alamat_user']; ?></td>
                                        <td><?= $row['jkel_user']; ?></td>
                                        <td><?= $row['username_user']; ?></td>
                                        <td>
                                            <a href="/User/hapus_user/<?= $row['id_user']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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