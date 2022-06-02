<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan</h6>
            <!-- <a href="<?= base_url('admin/fasilitas/add') ?>" class="btn btn-sm btn-success">Tambah</a> -->
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>No Identitas</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tamu as $t) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $t->nama_lengkap ?></td>
                                <td><?= $t->email ?></td>
                                <td><?= $t->notelp ?></td>
                                <td><?= $t->no_ident ?></td>
                                <td><?= $t->jenis_kelamin ?></td>
                                <td><?= $t->alamat ?></td>
                                <td>
                                    <button class="btn btn-sm btn-danger hapus" data-id="<?= base64_encode($t->id_tamu) ?>">Hapus</button>
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
        $(".hapus").click(function() {
            let id = $(this).data('id');

            console.log(id);

            Swal.fire({
                title: 'Yakin ingin hapus data tamu ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed == true) {
                    $.ajax({
                        url: "<?= base_url('resepsionis/tamu/delete/') ?>" + id,
                        data: {konfir: 1, id: $(this).data('id')},
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Berhasil Dihapus',
                                'Data Berhasil Dihapus',
                                'success'
                            );
                            setTimeout(function(){
                                window.location = "<?= base_url('resepsionis/tamu') ?>";
                            }, 3000);
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Dihapus',
                                'Data Gagal Dihapus',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('resepsionis/tamu') ?>";
                        }
                    });
                }
            });
        });
    });
</script>