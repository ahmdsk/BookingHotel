<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Galeri</h6>
            <a href="<?= base_url('admin/gallery/add') ?>" class="btn btn-sm btn-success">Tambah</a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($galeri as $g) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><img src="<?= $g->gambar_galeri ?>" alt="" style="width: 250px"></td>
                                <td>
                                    <a href="<?= base_url('admin/gallery/edit/' . base64_encode($g->id_galeri)) ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                                    <button type="button" class="btn btn-sm btn-danger del-galeri" data-id="<?= base64_encode($g->id_galeri) ?>">Hapus</button>
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
        $(".del-galeri").click(function() {
            let id = $(this).data('id');

            console.log(id);

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
                if (result.isConfirmed == true) {
                    $.ajax({
                        url: "<?= base_url('admin/gallery/delete/') ?>" + id,
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Berhasil Dihapus',
                                'Data Berhasil dihapus',
                                'success'
                            );
                            window.location = "<?= base_url('admin/gallery/') ?>";
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Dihapus',
                                'Data Gagal dihapus',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('admin/gallery/') ?>";
                        }
                    });
                }
            });
        });
    });
</script>