<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Instansi</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $instansi->id ?>">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Instansi *</label>
                            <input type="text" name="nama_i" id="nama_i" class="form-control <?= form_error('nama_i') ? 'is-invalid' : '' ?>" value="<?= $instansi->nama_instansi ?>">
                            <div class="invalid-feedback">
                                <?= form_error('nama_i') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gambar instansi <small>(jpg, jpeg, png. maks 3mb)</small>*</label>
                            <input type="file" name="gambar" id="gambar" class="form-control <?= form_error('gambar') ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= form_error('gambar') ?>
                            </div>
                            <?php if ($instansi->logo_instansi != null) { ?>
                                <img src="<?= $instansi->logo_instansi ?>" alt="" width="150" class="pt-2">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" name="email" id="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= $instansi->email ?>">
                            <div class="invalid-feedback">
                                <?= form_error('email') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Alamat *</label>
                            <input type="text" name="alamat" id="alamat" class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" value="<?= $instansi->alamat ?>">
                            <div class="invalid-feedback">
                                <?= form_error('alamat') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No Telp. *</label>
                            <input type="text" name="notelp" id="notelp" class="form-control <?= form_error('notelp') ? 'is-invalid' : '' ?>" value="<?= $instansi->notelp ?>">
                            <div class="invalid-feedback">
                                <?= form_error('notelp') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Link Maps <small>(embeded google)</small> *</label>
                            <input type="text" name="maps" id="maps" class="form-control <?= form_error('maps') ? 'is-invalid' : '' ?>" value="<?= htmlentities($instansi->maps_instansi) ?>">
                            <div class="invalid-feedback">
                                <?= form_error('maps') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="desk" id="desk" class="form-control summernote" style="height: 225px"><?= $instansi->desk_instansi ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button type="submit" class="btn btn-primary mr-2">Edit</button>
                    <a href="<?= base_url('admin/instansi') ?>" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>