<?php $this->extend('user/layout/template'); ?>

<?php $this->section('konten'); ?>

<?php
$db = \Config\Database::connect();
$query_penyewaan = $db->table('penyewaan')
    ->select('penyewaan.id_penyewaan, lahan.gambar_lahan, lahan.harga_lahan')
    ->join('lahan', 'penyewaan.id_lahan=lahan.id_lahan')
    ->where('penyewaan.id_user', session()->get('id_user'))
    ->get()
    ->getRow();
?>

<section class="about dgray-bg" id="about">
    <div class="about type-1 padbot_120">

        <div class="d-flex justify-content-center">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-grow-1 ms-3">
                                <h1 class="h3 mb-3 text-center">Konfirmasi Pembayaran</h1>
                                <div class="">
                                    <form action="/Pembayaran/proses_tambah_pembayaran" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="form5Example1" class="form-control" value="<?= $sewa['id_penyewaan'] ?>" name="id_penyewaan" />
                                        <input type="hidden" id="form5Example1" class="form-control" value="<?= session()->get('id_user') ?>" name="id_user" />

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form5Example1">A/N Rekening</label>
                                            <input type="text" id="form5Example1" class="form-control" name="an_pembayaran" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form5Example2">Nomor Rekening</label>
                                            <input type="number" id="form5Example2" class="form-control" name="norek_pembayaran" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form5Example2">Total Harga</label>
                                            <input type="text" id="form5Example2" class="form-control" value="<?= $query_penyewaan->harga_lahan * $sewa['lama_penyewaan'] ?>" name="total_harga" readonly />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form5Example2">Tanggal Pembayaran</label>
                                            <input type="date" id="form5Example2" class="form-control" name="tanggal_pembayaran" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form5Example2">Bukti Pembayaran</label>
                                            <input type="file" id="form5Example2" class="form-control" name="bukti_pembayaran" required />
                                        </div>
                                        <div class="d-flex pt-1">
                                            <button type="submit" class="btn btn-primary flex-grow-1">Bayar Sekarang</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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