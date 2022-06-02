<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Fasilitas Kamar</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Fasilitas*</label>
                            <input type="text" name="nama_f" id="nama_f" class="form-control <?= form_error('nama_f') ? 'is-invalid' : '' ?>" value="<?= set_value('nama_f') ?>">
                            <div class="invalid-feedback">
                                <?= form_error('nama_f') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gambar Fasilitas *</label>
                            <input type="file" name="gambar" id="gambar" class="form-control <?= form_error('gambar') ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?= form_error('gambar') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="desk" id="desk" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                    <a href="<?= base_url('admin/fasilitas') ?>" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>