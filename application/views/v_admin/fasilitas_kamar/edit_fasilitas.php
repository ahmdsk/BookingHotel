<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Fasilitas Kamar</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $tipe->id_fasilitas ?>">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Fasilitas*</label>
                            <input type="text" name="nama_f" id="nama_f" class="form-control <?= form_error('nama_f') ? 'is-invalid' : '' ?>" value="<?= $tipe->nama_fasilitas ?>">
                            <div class="invalid-feedback">
                                <?= form_error('nama_f') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gambar Fasilitas <small>(jpg, jpeg, png. maks 3mb)</small>*</label>
                            <input type="file" name="gambar" id="gambar" class="form-control <?= form_error('gambar') ? 'is-invalid' : '' ?>" value="<?= $tipe->nama_fasilitas ?>">
                            <div class="invalid-feedback">
                                <?= form_error('gambar') ?>
                            </div>
                            <?php if($tipe->gambar_fasilitas != null){ ?>
                                <img src="<?= $tipe->gambar_fasilitas ?>" alt="" width="65" class="pt-2">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="desk" id="desk" class="form-control"><?= $tipe->desk_fasilitas ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button type="submit" class="btn btn-primary mr-2">Edit</button>
                    <a href="<?= base_url('admin/fasilitas') ?>" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>