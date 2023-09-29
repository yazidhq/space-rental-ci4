<?php $this->extend('user/layout/template'); ?>

<?php $this->section('konten'); ?>

<!-- BLOG -->
<section class="blog" id="blog">
    <div class="container-fluid padbot_200">
        <div class="container">
            <div class="section-title dright top_120 bottom_45">
                <h2>KATALOG LAHAN</h2>
            </div>
            <!-- Blogs -->
            <div class="row">
                <?php foreach ($lahan as $row) : ?>
                    <a href="/Lahan/single_lahan/<?= $row['id_lahan'] ?>" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-content wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="/self-assets/gambar-lahan/<?= $row['gambar_lahan'] ?>">
                        </div>
                        <h2 class="blog-title"><?= $row['luas_lahan'] ?>m | <?= $row['status_lahan'] == 1 ? 'Lahan Tersedia' : 'Lahan Tidak Tersedia' ?></h2>
                        <p><?= $row['fasilitas_lahan'] ?></p>
                        <span class="blog-info"><span>Rp. <?= number_format($row['harga_lahan']) ?></span> - <?= $row['kategori_lahan'] ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="contact bg-light" id="contact" style="margin-top: -7%;margin-bottom:-7%">
    <div class="container">

        <div class="section-title dleft">
            <h2 class="bottom_30 mt-4 p-2">GET IN TOUCH</h2>
        </div>
        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
            <!-- Contact Info -->
            <ul class="contact-info row">
                <li>1444 S. Alameda Street Los Angeles, California 90021</li>
                <li><br>hi@berlin.com</li>
                <li>0800 123 456789</li>
            </ul>
            <div class="social-icons top_60 row">
                <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="bh" href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="col-md-7 col-md-offset-2 form top_30 bottom_90 wow fadeInUp" data-wow-delay="0.6s">
            <div class="page-title sub">
                <h5>leave us a message</h5>
            </div>
            <form class="contact-form top_60" method="POST" action="mail.php">
                <div class="row">
                    <!--Name-->
                    <div class="col-md-6">
                        <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Name">
                    </div>
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <!--Message-->
                        <textarea name="con_message" id="con_message" class="requie" placeholder="How can I help you?" rows="8"></textarea>
                        <button id="con_submit" class="sitebtn top_30 pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>