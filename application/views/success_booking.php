<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="<?= base_url('hiroto/img/breadcrumb-bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1>Booking Berhasil</h1>
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
        <h3>Pesanan Berhasil, Cek Bukti Pemesanan</h3>
        <p>*Note: Bukti Dapat Dicetak Atau Di Screenshot</p>
        <a href="<?= base_url('room/bukti_pesanan/' . $bukti->id_pesanan) ?>" class="btn btn-dark mt-2">Cek Bukti</a>
        <?php
        if ($this->session->userdata('rating') == null) {
        ?>
            <hr>
            <p>Ingin Memberi Rating?</p>
            <form action="<?= base_url('room/booking_rate/' . $bukti->id_pesanan) ?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Rating *</label>
                            <input type="number" class="form-control" name="rating" id="rating" placeholder="Rating 1-5" min="1" max="5">
                        </div>
                        <div class="form-group">
                            <label>Masukan</label>
                            <textarea class="form-control" name="masukan" id="masukan" rows="5" placeholder="Berikan Masukan"></textarea>
                        </div>
                        <button class="btn btn-sm btn-dark">Submit</button>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</section>
<!-- Rooms Section End -->