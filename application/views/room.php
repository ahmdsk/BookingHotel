<?php $this->session->unset_userdata('rating'); ?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="<?= base_url('hiroto/img/breadcrumb-bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1>Available <?= $title ?></h1>
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
                        <div class="room__pic__item set-bg" data-setbg="<?= $k->gambar_kamar ?>"></div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 col-md-6">
                    <div class="room__text ml-5">
                        <h3><?= $k->tipe_kamar ?></h3>
                        <h2><sup>Rp.</sup> &nbsp;<?= number_format($k->harga_kamar) ?><span>/Hari</span></h2>
                        <ul>
                            <li><span>No Kamar: </span><?= $k->no_kamar ?></li>
                            <li><span>Stok Kamar: </span><?= $k->stok_kamar ?> Kamar</li>
                            <li><span>Max Dewasa: </span><?= $k->max_dewasa ?></li>
                            <li><span>Max Anak  : </span><?= $k->max_anak ?></li>
                            <li><span>Deskripsi: </span></li>
                            <li><?= substr($k->desk_kamar, 0, 100) ?> ...</li>
                        </ul>
                        <a href="<?= base_url('room/booking/'.base64_encode($k->id_kamar)) ?>">Booking</a>
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