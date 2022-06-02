<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Rating Pengguna</h6>
            <!-- <a href="<?= base_url('admin/fasilitas/add') ?>" class="btn btn-sm btn-success">Tambah</a> -->
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Rating</th>
                            <th>Masukan</th>
                            <th>Tipe Kamar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rating as $r) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r->email_users ?></td>
                                <td><?= $r->rating ?></td>
                                <td><?= $r->masukan ?></td>
                                <td><?= $r->tipe_kamar ?></td>
                                <td>
                                    <button class="hapus btn btn-sm btn-danger" data-id="<?= $r->id_ulasan ?>">Hapus</button>
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
                title: 'Hapus Rating Ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Konfirmasi',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed == true) {
                    $.ajax({
                        url: "<?= base_url('resepsionis/rating/hapus/') ?>" + id,
                        data: {konfir: 1, id: $(this).data('id')},
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Rating Telah Dihapus',
                                'Berhasil Hapus Rating',
                                'success'
                            );
                            setTimeout(function(){
                                window.location = "<?= base_url('resepsionis/rating') ?>";
                            }, 3000);
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Hapus Rating',
                                'Rating Gagal Dihapus',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('resepsionis/rating') ?>";
                        }
                    });
                }
            });
        });
    });
</script>