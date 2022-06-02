    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="<?= base_url('hiroto/img/hero.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h5>WELCOME HIROTO</h5>
                        <h2>Experience the greatest for you holidays.</h2>
                    </div>
                    <form action="<?= base_url('room') ?>" method="get" class="filter__form">
                        <div class="filter__form__item">
                            <p>Check In</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__in" name="check_in">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Check Out</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__out" name="check_out">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item filter__form__item--select">
                            <p>Dewasa</p>
                            <div class="filter__form__select">
                                <span class="icon_group"></span>
                                <select name="adult">
                                    <?php
                                    for ($i = 1; $i <= 6; $i++) :
                                        echo '<option value="' . $i . '">' . $i . ' Dewasa</option>';
                                    endfor;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="filter__form__item filter__form__item--select">
                            <p>Anak</p>
                            <div class="filter__form__select">
                                <span class="icon_group"></span>
                                <select name="child">
                                    <?php
                                    for ($i = 1; $i <= 6; $i++) :
                                        echo '<option value="' . $i . '">' . $i . ' Anak</option>';
                                    endfor;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit">BOOK NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>ABOUT US</h5>
                            <h2>Welcome Hiroto Hotel In Street L’Abreuvoir</h2>
                        </div>
                        <p class="first-para">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p class="last-para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque.</p>
                        <img src="<?= base_url('hiroto/img/home-about/sign.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="<?= base_url('hiroto/img/home-about/home-about.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <?php foreach ($fasilitas as $f) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="<?= $f->gambar_fasilitas ?>" alt="<?= $f->nama_fasilitas ?>">
                            <h4><?= $f->nama_fasilitas ?></h4>
                            <p><?= $f->desk_fasilitas ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="home-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>OUR ROOM</h5>
                        <h2>Explore Our Hotel</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($kamar as $k) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                        <div class="home__room__item set-bg" data-setbg="<?= $k->gambar_kamar ?>">
                            <div class="home__room__title">
                                <h4><?= $k->tipe_kamar ?></h4>
                                <h2><sup>Rp.</sup><?= number_format($k->harga_kamar, '0', ',', ',') ?><span>/Hari</span></h2>
                            </div>
                            <a href="#">Booking Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <!-- <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__pic">
                        <img src="<?= base_url('hiroto/img/testimonial-left.jpg') ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__text">
                        <div class="section-title">
                            <h5>Testimonials</h5>
                            <h2>What do customers say about us?</h2>
                        </div>
                        <div class="testimonial__slider__content">
                            <div class="testimonial__slider owl-carousel">
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Ridchard Houston</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>John Smith</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Jack Kelly</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Richard Hobson</h5>
                                                    <span>Director Colorlib</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-num" id="snh-1"></div>
                            <div class="slider__progress"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Testimonial Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery spad">
        <div class="gallery__text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="section-title">
                            <h5>OUR GALLERY</h5>
                            <h2>Explore The Most Beautiful In The Hotel</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery__title">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Sunt in culpa qui officia deserunt mollit anim.</p>
                            <a href="#" class="primary-btn">View Gallery <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__slider owl-carousel">
            <!-- <div class="gallery__item small__item set-bg" data-setbg="<?= base_url('hiroto/img/gallery/gallery-1.jpg') ?>"></div> -->
            <?php foreach($galeri as $g): ?>
                <div class="gallery__item set-bg" data-setbg="<?= $g->gambar_galeri ?>"></div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Gallery Section End -->

    <br><br><br>