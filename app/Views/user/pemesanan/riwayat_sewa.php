<?php $this->extend('user/layout/template'); ?>

<?php $this->section('konten'); ?>

<?php
$db = \Config\Database::connect();
$query_penyewaan = $db->table('penyewaan')
    ->select('penyewaan.id_penyewaan, lahan.gambar_lahan, lahan.harga_lahan, lahan.status_lahan')
    ->join('lahan', 'penyewaan.id_lahan=lahan.id_lahan')
    ->where('penyewaan.id_user', session()->get('id_user'))
    ->get()
    ->getRow();
?>

<section class="about dgray-bg" id="about">
    <div class="about type-1 padbot_120">

        <h1 class="text-center h1" style="margin-top: -1%;margin-bottom:3%"><strong>Riwayat Penyewaan</strong></h1>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Gambar Lahan</th>
                        <th scope="col">Kategori Lahan</th>
                        <th scope="col">Tanggal Sewa</th>
                        <th scope="col">Jatuh Tempo</th>
                        <th scope="col">Lama Sewa</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Status Sewa</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sewa as $row) : ?>
                        <?php
                        $tanggalSewa = new DateTime($row['tanggal_penyewaan']);
                        $lamaPenyewaan = $row['lama_penyewaan'];
                        $tanggalJatuhTempo = clone $tanggalSewa;
                        $tanggalJatuhTempo->add(new DateInterval("P{$lamaPenyewaan}M"));
                        $statusPenyewaan = ($row['status_penyewaan'] == '0') ? 'Belum Bayar' : '';
                        $tanggalJatuhTempoFormatted = $tanggalJatuhTempo->format('Y-m-d');
                        $sekarang = new DateTime();
                        ?>
                        <tr>
                            <th scope="row">
                                <img src="/self-assets/gambar-lahan/<?= $query_penyewaan->gambar_lahan ?>" width="200" alt="">
                            </th>
                            <td><?= $row['kategori_lahan'] ?></td>
                            <td><?= $row['tanggal_penyewaan'] ?></td>
                            <td><?= $tanggalJatuhTempoFormatted ?></td>
                            <td><?= $row['lama_penyewaan'] ?> Bulan</td>
                            <td>Rp. <?= number_format($query_penyewaan->harga_lahan * $row['lama_penyewaan']) ?></td>
                            <td>
                                <?= $row['status_penyewaan']; ?>
                            </td>
                            <td>
                                <div class="d-grid gap-2">
                                    <?php if ($row['status_penyewaan'] == 'Belum Bayar') : ?>
                                        <?php if ($tanggalJatuhTempo <= $sekarang) : ?>
                                            <p>Waktu sewa telah habis</p>
                                            <a href="/Penyewaan/hapus_penyewaan_tanpa_ubah_status_rumah/<?= $row['id_penyewaan'] ?>" class="btn btn-danger btns-sm">Akhiri Sewa</a>
                                        <?php else : ?>
                                            <?php if ($query_penyewaan->status_lahan === 0) : ?>
                                                <p>Sudah ada yang membayar lahan ini</p>
                                                <a href="/Penyewaan/hapus_penyewaan_tanpa_ubah_status_rumah/<?= $row['id_penyewaan'] ?>" class="btn btn-danger btns-sm">Hapus Sewa</a>
                                            <?php else : ?>
                                                <a href="/Pembayaran/form_pembayaran/<?= $row['id_penyewaan'] ?>" class="btn btn-success btns-sm">Bayar</a>
                                                <a href="/Penyewaan/hapus_penyewaan/<?= $row['id_penyewaan'] ?>" class="btn btn-danger btns-sm">Batalkan Sewa</a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php elseif ($row['status_penyewaan'] == 'Sudah Bayar') : ?>
                                        <p>Pesanan Diproses</p>
                                    <?php elseif ($row['status_penyewaan'] == 'Pesanan Diterima') : ?>
                                        <p>Pesanan Diterima</p>
                                    <?php elseif ($row['status_penyewaan'] == 'Pesanan Ditolak') : ?>
                                        <p>Pesanan Ditolak</p>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
                <p>*note: jika sudah melakukan pembayaran, maka sewa tidak dapat dibatalkan</p><br>
            </table>
        </div>

    </div>
</section>

<!-- BLOG -->
<section class="blog" id="blog">
    <div class="container-fluid padbot_200">
        <div class="container">
            <div class="section-title dright top_120 bottom_45">
                <h2>LAHAN TERBARU</h2>
            </div>
            <!-- Blogs -->
            <div class="row">
                <?php foreach ($lahans as $row) : ?>
                    <a href="/Lahan/single_lahan/<?= $row['id_lahan'] ?>" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="/self-assets/gambar-lahan/<?= $row['gambar_lahan'] ?>">
                        </div>
                        <h2 class="blog-title"><?= $row['luas_lahan'] ?>m | <?= $row['status_lahan'] == 1 ? 'Lahan Tersedia' : 'Lahan Tidak Tersedia' ?></h2>
                        <p><?= $row['fasilitas_lahan'] ?></p>
                        <span class="blog-info"><span>Rp. <?= number_format($row['harga_lahan']) ?></span> - <?= $row['kategori_lahan'] ?></span>
                    </a>
                <?php endforeach; ?>
                <a href="/Lahan/katalog_lahan" class="sitebtn pull-right">See More</a>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>