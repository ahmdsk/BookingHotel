<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Galeri</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $galeri->id_galeri ?>">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gambar <small>(jpg, jpeg, png. maks 3mb)</small>*</label>
                            <input type="file" name="gambar" id="gambar" class="form-control <?= form_error('gambar') ? 'is-invalid' : '' ?>" value="<?= $galeri->gambar_galeri ?>">
                            <div class="invalid-feedback">
                                <?= form_error('gambar') ?>
                            </div>
                            <?php if($galeri->gambar_galeri != null){ ?>
                                <img src="<?= $galeri->gambar_galeri ?>" alt="" width="250" class="pt-2">
                            <?php } ?>
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