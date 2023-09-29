<?php $this->extend('user/layout/template'); ?>

<?php $this->section('konten'); ?>

<!--HOME-->
<section class="home" id="home">
    <div class="home-content">
        <div class="container">
            <h1>Welcome to<br> <span class="element" data-text1="Sewa Lahan Toko Terminal" data-loop="true" data-backdelay="3000"></span></h1>
            <div class="social">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i> </a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i> </a>
            </div>
            <a class="home-down bounce" href="#about">
                <span style="font-size: 50%;">See Details</span><br>
                <i class="fa fa-angle-down"></i>
            </a>
        </div>
    </div>
    <svg class="diagonal home-left" width="21%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="diagonal home-right" width="80%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<!--ABOUT-->
<section class="about dgray-bg" id="about">
    <div class="about type-1 padbot_120">
        <div class="container">
            <!-- about image -->
            <div class="col-md-4 col-sm-12 about-image top_30 wow fadeInUp" data-wow-delay="0.4s">
                <div class="row">
                    <img src="/user-assets/images/profile-2.jpg" alt="">
                </div>
            </div>
            <!-- about text -->
            <div class="col-md-7 col-md-offset-1 col-sm-12 about-text wow fadeInUp" data-wow-delay="0.6s">
                <div class="section-title dleft bottom_30">
                    <br>
                    <h2>ABOUT US</h2>
                </div>
                <p>For instance, whenever I go back to the guest house during the <b>morning</b> to copy out the contract, <b>these gentlemen</b> are always still sitting there eating their breakfasts. I ought to just try that witht my boss; I'd get kicked out on the spot.

                    <br><br>
                    But who knows, maybe that would be the best thing for me. He'd fall right off his desk! And it's a funny sort of business to be sitting up there at your desk, talking down at your subordinates. I ought to just try that witht my boss; I'd get kicked out on the spot. But who knows, maybe that would be the best thing for me. He'd fall right off his desk! And it's a funny sort of business to be sitting up there at your desk, talking down at your subordinates.
                </p>
            </div>

            <!-- work areas -->
            <div class="owl-carousel work-areas top_120 bottom_120 wow fadeInUp" data-pagination="false" data-autoplay="3000" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1" data-wow-delay="0.4s">
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="1" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Web Design</h6>
                        <p>Cloud agency follows the latest design standards to deliver a beautiful and functional digital product.</p>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="!" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Branding Identity</h6>
                        <p>We will make you a brand that is catchy and leaves a trace. Your target group will never forget you.</p>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="#" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Illustrator</h6>
                        <p>I ought to just try that with my boss; I'd get kicked out on the spot. But who knows, maybe that would be the best thing me. </p>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="1" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Web Design</h6>
                        <p>Cloud agency follows the latest design standards to deliver a beautiful and functional digital product.</p>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="!" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Branding Identity</h6>
                        <p>We will make you a brand that is catchy and leaves a trace. Your target group will never forget you.</p>
                    </div>
                </div>
                <!-- an area -->
                <div class="area col-md-12 item">
                    <div class="icon">
                        <i data-icon="#" class="icon"></i>
                    </div>
                    <div class="text">
                        <h6>Illustrator</h6>
                        <p>I ought to just try that with my boss; I'd get kicked out on the spot. But who knows, maybe that would be the best thing me. </p>
                    </div>
                </div>
            </div>

        </div>
        <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 0 L70 100 L100 0 Z"></path>
        </svg>
    </div>
</section>

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
                <a href="/Lahan/katalog_lahan" class="sitebtn pull-right">See More</a>
            </div>
        </div>
    </div>
</section>

<hr>

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