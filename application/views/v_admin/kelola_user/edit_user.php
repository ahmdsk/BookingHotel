<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Pengguna</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="" method="post">
                <input type="hidden" name="iduser" value="<?= $user->id_user ?>">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" value="<?= $user->nama_lengkap ?>">
                            <div class="invalid-feedback">
                                <?= form_error('name') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= $user->email ?>">
                            <div class="invalid-feedback">
                                <?= form_error('email') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Hak Akses</label>
                            <select class="form-control <?= form_error('hak') ? 'is-invalid' : '' ?>" value="<?= $user->hak_akses ?>" name="hak" id="hak">
                                <option selected disabled>== Pilih Hak Akses ==</option>
                                <?php
                                $select_hak = $user->hak_akses;
                                $hak = ['Admin', 'Resepsionis', 'User'];
                                foreach ($hak as $index => $hak_akses) {
                                    if ($select_hak == $index) {
                                        echo '<option value=' . $index . ' selected>' . $hak_akses . '</option>';
                                    } else {
                                        echo '<option value=' . $index . '>' . $hak_akses . '</option>';
                                    }
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('hak') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" name="notelp" id="notelp" class="form-control <?= form_error('notelp') ? 'is-invalid' : '' ?>" value="<?= $user->no_telp ?>">
                            <div class="invalid-feedback">
                                <?= form_error('notelp') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control <?= form_error('jk') ? 'is-invalid' : '' ?>" value="<?= $user->jenis_kelamin ?>" name="jk" id="jk">
                                <option selected disabled>== Pilih Jenis Kelamin ==</option>
                                <?php
                                $select_jk = $user->jenis_kelamin;
                                $jekel = ['Pria', 'Wanita'];
                                foreach ($jekel as $i => $jk) {
                                    if ($select_jk == $i) {
                                        echo '<option value=' . $i . ' selected>' . $jk . '</option>';
                                    } else {
                                        echo '<option value=' . $i . '>' . $jk . '</option>';
                                    }
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('jk') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button type="submit" class="btn btn-sm btn-primary mr-2">Edit</button>
                    <a href="<?= base_url('admin/kelola_user/delete/' . base64_encode($user->id_user)) ?>" class="btn btn-sm btn-danger mr-2">Hapus</a>
                    <a href="<?= base_url('admin/kelola_user') ?>" class="btn btn-sm btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>