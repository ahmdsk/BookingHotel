<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            <a href="<?= base_url('admin/kelola_user/add') ?>" class="btn btn-sm btn-success">Tambah</a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Jenis Kelamin</th>
                            <th>Hak Akses</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($users as $u) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $u->nama_lengkap ?></td>
                                <td><?= $u->email ?></td>
                                <td><?= $u->no_telp ?></td>
                                <td>
                                    <?php
                                    if ($u->jenis_kelamin == 0) {
                                        echo 'Pria';
                                    } elseif ($u->jenis_kelamin == 1) {
                                        echo 'Wanita';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($u->hak_akses == 0) {
                                        echo '<span class="badge badge-dark">Admin</span>';
                                    } elseif ($u->hak_akses == 1) {
                                        echo '<span class="badge badge-success">Resepsionis</span>';
                                    } elseif ($u->hak_akses == 2) {
                                        echo '<span class="badge badge-warning">User</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/kelola_user/edit/' . base64_encode($u->id_user)) ?>" class="btn btn-sm btn-primary mr-2">Edit</a>
                                    <button class="btn btn-sm btn-danger del-user" data-id="<?= base64_encode($u->id_user) ?>">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".del-user").click(function() {
            let id = $(this).data('id');

            Swal.fire({
                title: 'Apa kamu yakin?',
                text: "Setelah menghapus data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= base_url('admin/kelola_user/delete/') ?>" + id,
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Berhasil Dihapus',
                                'Data Berhasil dihapus',
                                'success'
                            );
                            window.location = "<?= base_url('admin/kelola_user/') ?>";
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Dihapus',
                                'Data Gagal dihapus',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('admin/kelola_user/') ?>";
                        }
                    });
                }
            });
        });
    });
</script>