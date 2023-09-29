<?php $this->extend('user/layout/template'); ?>

<?php $this->section('konten'); ?>

<section class="about dgray-bg" id="about">
    <div class="about type-1 padbot_120">

        <div class="d-flex justify-content-center" style="margin-top: -4%;">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="flex-shrink-0">
                            <img src="/self-assets/gambar-lahan/<?= $lahan['gambar_lahan'] ?>" alt="Generic placeholder image" class="img-fluid" style="border-radius: 5px;">
                        </div>
                        <div class="d-flex text-black">

                            <div class="flex-grow-1 mt-3">
                                <h5 class="mb-1 h2"><strong><?= $lahan['kategori_lahan'] ?></strong></h5>
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">Fasilitas lahan: <?= $lahan['fasilitas_lahan'] ?>m</p>
                                <div class="d-flex justify-content-start rounded-3 p-4 mb-2" style="background-color: #efefef;">
                                    <div>
                                        <p class="small text-muted mb-1">Status Lahan</p>
                                        <p class="mb-0"><?= $lahan['status_lahan'] == 1 ? 'Tersedia' : 'Tidak Tersedia' ?></p>
                                    </div>
                                    <div class="px-3">
                                        <p class="small text-muted mb-1">Harga Lahan</p>
                                        <p class="mb-0">Rp. <?= number_format($lahan['harga_lahan']) ?></p>
                                    </div>
                                    <div class="px-3">
                                        <p class="small text-muted mb-1">Kategori Lahan</p>
                                        <p class="mb-0"><?= $lahan['kategori_lahan'] ?></p>
                                    </div>
                                    <div class="px-3">
                                        <p class="small text-muted mb-1">Luas Lahan</p>
                                        <p class="mb-0"><?= $lahan['luas_lahan'] ?>m</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-1">
                                    <a href="/Lahan/katalog_lahan" type="button" class="btn btn-success me-1 flex-grow-1">Lihat Katalog Lahan</a>
                                    <?php if (empty(session()->get('id_user'))) : ?>
                                        <a href="" type="button" class="btn btn-primary flex-grow-1" style="pointer-events: none;cursor: not-allowed;opacity: 0.5;">Login untuk melakukan menyewaan</a>
                                    <?php else : ?>
                                        <a href="/Penyewaan/form_penyewaan/<?= $lahan['id_lahan'] ?>" type="button" class="btn btn-primary flex-grow-1" <?= $lahan['status_lahan'] == 0 ? 'style="pointer-events: none;cursor: not-allowed;opacity: 0.5;"' : '' ?>>Sewa Sekarang</a>
                                    <?php endif; ?>
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