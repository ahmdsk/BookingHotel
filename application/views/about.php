<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="<?= base_url('hiroto/img/breadcrumb-bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1><?= $title ?></h1>
                    <div class="breadcrumb__links">
                        <a href="<?= base_url() ?>">Home</a>
                        <span><?= $title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="about__content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h5>Our Specialization</h5>
                        <h2>Welcome Hiroto</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__text">
                        <p>Metasurfaces are generally designed by placing scatterers in periodic or pseudo-periodic
                            grids.</p>
                        <p>I am convinced the only way to make money online is to have a consistent Advertising
                            plan. A plan you are willing to work hard on and commit to for a selected period of
                            time. When making this plan, you need to do two things.</p>
                    </div>
                </div>
            </div>
        </div>
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
<!-- About Section End -->

<!-- Chooseus Section Begin -->
<div class="chooseus spad set-bg" data-setbg="<?= base_url('hiroto/img/chooseus-bg.jpg') ?>">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="chooseus__text">
                    <div class="section-title">
                        <h5>WHY CHOOSE US</h5>
                        <h2>Contact us now to get the latest deals and for the next booking</h2>
                    </div>
                    <a href="#" class="primary-btn">Booking Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chooseus Section End -->

<!-- History Section Begin -->
<section class="history spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title history-title">
                    <h5>Our History</h5>
                    <h2>Explore Our Hotel</h2>
                </div>
            </div>
        </div>
        <div class="history__content">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="history__item left__item">
                        <div class="history__date"></div>
                        <span>11 Dec 1990</span>
                        <h4>Start Up Building Hotel</h4>
                        <img src="<?= base_url('hiroto/img/history/history-1.jpg') ?>" alt="">
                        <p>The young woman who turned a style setback into an envious outfit has officially inspired
                            a major clothing retailer with her impromptu ingenuity</p>
                    </div>
                    <div class="history__item left__item mb-0">
                        <div class="history__date"></div>
                        <span>29 Jan 1990</span>
                        <h4>Building Pool In The Beach</h4>
                        <img src="<?= base_url('hiroto/img/history/history-3.jpg') ?>" alt="">
                        <p>The young woman who turned a style setback into an envious outfit has officially inspired
                            a major clothing retailer with her impromptu ingenuity</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-5 offset-md-2">
                    <div class="history__item right__first__item">
                        <div class="history__date"></div>
                        <span>08 March 1990</span>
                        <h4>Best Hotel Award Of The Year</h4>
                        <img src="<?= base_url('hiroto/img/history/history-2.jpg') ?>" alt="">
                        <p>The young woman who turned a style setback into an envious outfit has officially inspired
                            a major clothing retailer with her impromptu ingenuity</p>
                    </div>
                    <div class="history__item mb-0">
                        <div class="history__date"></div>
                        <span>06 July 1990</span>
                        <h4>Open New Hotel In New York</h4>
                        <img src="<?= base_url('hiroto/img/history/history-4.jpg') ?>" alt="">
                        <p>The young woman who turned a style setback into an envious outfit has officially inspired
                            a major clothing retailer with her impromptu ingenuity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- History Section End -->