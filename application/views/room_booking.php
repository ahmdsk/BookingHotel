<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="<?= base_url('hiroto/img/breadcrumb-bg.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1>Booking</h1>
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
        <h3>Formulir Pemesanan <small>(isi data dengan benar!)</small></h3>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="id_kamar" value="<?= $kamar->id_kamar ?>">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Check In</label>
                        <input type="date" name="check_in" id="check_in" class="form-control <?= form_error('check_in') ? 'is-invalid' : '' ?>" value="<?= set_value('check_in') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('check_in') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Check Out</label>
                        <input type="date" name="check_out" id="check_out" class="form-control <?= form_error('check_out') ? 'is-invalid' : '' ?>" value="<?= set_value('check_out') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('check_out') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Jumlah Kamar</label>
                        <input type="number" min="1" name="jml_kamar" id="jml_kamar" class="form-control <?= form_error('jml_kamar') ? 'is-invalid' : '' ?>" value="<?= set_value('jml_kamar') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('jml_kamar') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= set_value('nama') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('nama') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No Identitas <small>(KTP, SIM, NPWP)</small></label>
                        <input type="text" name="noident" id="noident" class="form-control <?= form_error('noident') ? 'is-invalid' : '' ?>" value="<?= set_value('noident') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('noident') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= set_value('email') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('email') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No Telp.</label>
                        <input type="text" name="notelp" id="notelp" class="form-control <?= form_error('notelp') ? 'is-invalid' : '' ?>" value="<?= set_value('notelp') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('notelp') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Kelamin <small>(pria, wanita)</small></label>
                        <input type="text" name="jk" id="jk" class="form-control <?= form_error('jk') ? 'is-invalid' : '' ?>" value="<?= set_value('jk') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('jk') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" value="<?= set_value('alamat') ?>">
                        <div class="invalid-feedback">
                            <?= form_error('alamat') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-dark">Pesan</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Rooms Section End -->