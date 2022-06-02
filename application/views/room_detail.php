<!-- Room Details Slider Begin -->
<div class="room-details-slider">
    <div class="container">
        <div class="room__details__pic__slider owl-carousel">
            <div class="room__details__pic__slider__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/details/rd-1.jpg') ?>"></div>
            <div class="room__details__pic__slider__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/details/rd-2.jpg') ?>"></div>
            <div class="room__details__pic__slider__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/details/rd-3.jpg') ?>"></div>
            <div class="room__details__pic__slider__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/details/rd-4.jpg') ?>"></div>
        </div>
    </div>
</div>
<!-- Room Details Slider End -->

<!-- Rooms Details Section Begin -->
<section class="room-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="room__details__content">
                    <div class="room__details__rating">
                        <div class="room__details__hotel">
                            <span>Hotel</span>
                            <div class="room__details__hotel__rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                        </div>
                        <div class="room__details__advisor">
                            <img src="img/rooms/details/tripadvisor.png" alt="">
                            <div class="room__details__advisor__rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <span class="review">(1000 Reviews)</span>
                        </div>
                    </div>
                    <div class="room__details__title">
                        <h2><?= $kamar->tipe_kamar ?></h2>
                        <!-- <a href="#" class="primary-btn">Booking Now</a> -->
                    </div>
                    <div class="room__details__desc">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h2>Deskripsi:</h2>
                                <?= $kamar->desk_kamar ?>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="room__details__more__facilities">
                                    <h2>Fasilitas Tersedia:</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-1.png') ?>" alt=""></div>
                                                <h6>Air Conditioning</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-2.png') ?>" alt=""></div>
                                                <h6>Cable TV</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-3.png') ?>" alt=""></div>
                                                <h6>Free drinks</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-4.png') ?>" alt=""></div>
                                                <h6>Unlimited Wifi</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-5.png') ?>" alt=""></div>
                                                <h6>Restaurant quality</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-6.png') ?>" alt=""></div>
                                                <h6>Service 24/24</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-7.png') ?>" alt=""></div>
                                                <h6>Gym Centre</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img src="<?= base_url('hiroto/img/rooms/details/facilities/fac-8.png') ?>" alt=""></div>
                                                <h6>Spa & Wellness</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="blog__details__comment">
                    <?php if ($rating->num_rows() == 0) { ?>
                        <h3>Belum Ada Ulasan</h3>
                    <?php } else { ?>
                        <h3><?= $rating->num_rows() ?> Ulasan</h3>
                        <?php foreach ($rating->result() as $r) : ?>
                            <div class="blog__details__comment__item">
                                <div class="blog__details__comment__item__pic">
                                    <img src="<?= base_url('sb2/img/undraw_profile.svg') ?>" alt="">
                                </div>
                                <div class="blog__details__comment__item__text">
                                    <span><?= date('Y-m-d', strtotime($r->created_at)) ?></span>
                                    <h5><?= $r->email_users ?></h5>
                                    <p><?= $r->masukan ?></p>
                                    <div class="room__details__rating">
                                        <div class="room__details__hotel">
                                            <div class="room__details__hotel__rating">
                                                <?php for($i=1;$i<=$r->rating;$i++){ ?>
                                                    <span class="icon_star"></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Details Section End -->