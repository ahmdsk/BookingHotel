<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Kamar</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="" method="post">
                <div class="row mt-3">
                    <input type="hidden" name="id" value="<?= $kamar->id_kamar ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No Kamar</label>
                            <input type="text" name="no_kamar" id="no_kamar" class="form-control <?= form_error('no_kamar') ? 'is-invalid' : '' ?>" value="<?= 'HR' . sprintf("%03d", $kamar->id_kamar); ?>">
                            <div class="invalid-feedback">
                                <?= form_error('no_kamar') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipe Kamar</label>
                            <select class="form-control <?= form_error('tipe_kamar') ? 'is-invalid' : '' ?>" value="<?= $kamar->id_tipe_kamar ?>" name="tipe_kamar" id="tipe_kamar">
                                <option selected disabled>== Pilih Tipe Kamar ==</option>
                                <?php
                                $s_tipe = $kamar->id_tipe_kamar;
                                $tipe   = $tipe_k->result();
                                foreach ($tipe_k->result() as $t) {
                                    if ($s_tipe == $t->id_tipe) {
                                        echo '<option value="' . $s_tipe . '" selected>' . $t->tipe_kamar . '</option>';
                                    } else {
                                        echo '<option value="' . $t->id_tipe . '">' . $t->tipe_kamar . '</option>';
                                    }
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('tipe_kamar') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Max Dewasa</label>
                            <input type="number" name="max_dewasa" id="max_dewasa" class="form-control <?= form_error('max_dewasa') ? 'is-invalid' : '' ?>" value="<?= $kamar->max_dewasa ?>">
                            <div class="invalid-feedback">
                                <?= form_error('max_dewasa') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Max Anak</label>
                            <input type="number" name="max_anak" id="max_anak" class="form-control <?= form_error('max_anak') ? 'is-invalid' : '' ?>" value="<?= $kamar->max_anak ?>">
                            <div class="invalid-feedback">
                                <?= form_error('max_anak') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Stok Kamar</label>
                            <input type="number" name="stok_kamar" id="stok_kamar" class="form-control <?= form_error('stok_kamar') ? 'is-invalid' : '' ?>"  value="<?= $kamar->stok_kamar ?>">
                            <div class="invalid-feedback">
                                <?= form_error('stok_kamar') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button type="submit" class="btn btn-primary mr-2">Edit</button>
                    <a href="<?= base_url('admin/kelola_kamar') ?>" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>