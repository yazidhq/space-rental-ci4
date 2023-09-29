<?php $this->extend('user/layout/template'); ?>

<?php $this->section('konten'); ?>

<section class="about dgray-bg" id="about">
    <div class="about type-1 padbot_120">

        <div class="d-flex justify-content-center">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-grow-1 ms-3">
                                <h1 class="h3 mb-3 text-center">Formulir Penyewaan</h1>
                                <div class="">
                                    <form action="/Penyewaan/proses_tambah_penyewaan" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_user" value="<?= session()->get('id_user') ?>">
                                        <input type="hidden" name="id_lahan" value="<?= $lahan['id_lahan'] ?>">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="kategoriLahan">Kategori Lahan</label>
                                            <input type="text" id="kategoriLahan" class="form-control" value="<?= $lahan['kategori_lahan'] ?>" name="kategori_lahan" readonly>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="lamaSewa">Lama Sewa</label>
                                            <select name="lama_penyewaan" class="form-select" aria-label="Default select example">
                                                <option value="3">3 Bulan</option>
                                                <option value="6">6 Bulan</option>
                                                <option value="12">1 Tahun</option>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="tanggalSewa">Tanggal Sewa</label>
                                            <input type="date" id="tanggalSewa" class="form-control" name="tanggal_penyewaan">
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="npwp">Upload NPWP</label>
                                            <input type="file" id="npwp" class="form-control" name="npwp">
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="ktp">Upload KTP</label>
                                            <input type="file" id="ktp" class="form-control" name="ktp">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Proses Pemesanan</button>
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