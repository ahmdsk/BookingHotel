<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pengguna</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="" method="post">
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" value="<?= set_value('name') ?>">
                            <div class="invalid-feedback">
                                <?= form_error('name') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= set_value('email') ?>">
                            <div class="invalid-feedback">
                                <?= form_error('email') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" id="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" value="<?= set_value('password') ?>">
                            <div class="invalid-feedback">
                                <?= form_error('password') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Hak Akses</label>
                            <select class="form-control <?= form_error('hak') ? 'is-invalid' : '' ?>" value="<?= set_value('hak') ?>" name="hak" id="hak">
                                <option selected disabled>== Pilih Hak Akses ==</option>
                                <option value="0">Admin</option>
                                <option value="1">Resepsionis</option>
                                <option value="2">User</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('hak') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" name="notelp" id="notelp" class="form-control <?= form_error('notelp') ? 'is-invalid' : '' ?>" value="<?= set_value('notelp') ?>">
                            <div class="invalid-feedback">
                                <?= form_error('notelp') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control <?= form_error('jk') ? 'is-invalid' : '' ?>" value="<?= set_value('jk') ?>" name="jk" id="jk">
                                <option selected disabled>== Pilih Jenis Kelamin ==</option>
                                <option value="0">Pria</option>
                                <option value="1">Wanita</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('jk') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                    <a href="<?= base_url('admin/kelola_user') ?>" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>