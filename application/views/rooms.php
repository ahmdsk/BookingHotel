<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="<?= base_url('hiroto/img/breadcrumb-bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1>Our <?= $title ?></h1>
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

<!-- Rooms Section Begin -->
<section class="rooms spad">
    <div class="container">
        <div class="row">
            <?php foreach ($kamar as $k) : ?>
                <div class="col-lg-6 p-0 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                        <div class="room__pic__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/room-1.jpg') ?>"></div>
                        <div class="room__pic__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/room-2.jpg') ?>"></div>
                        <div class="room__pic__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/room-3.jpg') ?>"></div>
                        <div class="room__pic__item set-bg" data-setbg="<?= base_url('hiroto/img/rooms/room-4.jpg') ?>"></div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 col-md-6">
                    <div class="room__text ml-5">
                        <h3><?= $k->tipe_kamar ?></h3>
                        <h2><sup>Rp.</sup> &nbsp;<?= number_format($k->harga_kamar) ?><span>/Hari</span></h2>
                        <ul>
                            <li><span>Deskripsi: </span></li>
                            <li><?= $k->desk_kamar ?></li>
                        </ul>
                        <a href="<?= base_url('room/detail/'.base64_encode($k->id_tipe)) ?>">Detail Tipe Kamar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="pagination__number">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">Next <span class="arrow_right"></span></a>
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- Rooms Section End -->