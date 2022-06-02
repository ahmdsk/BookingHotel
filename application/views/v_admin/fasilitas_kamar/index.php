<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Fasilitas Kamar</h6>
            <a href="<?= base_url('admin/fasilitas/add') ?>" class="btn btn-sm btn-success">Tambah</a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nama Fasilitas</th>
                            <th>Gambar Fasilitas</th>
                            <th width="45%">Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tipe as $t) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $t->nama_fasilitas ?></td>
                                <td class="text-center"><img src="<?= $t->gambar_fasilitas ?>" alt="" style="width: 60px"></td>
                                <td><?= $t->desk_fasilitas ?></td>
                                <td>
                                    <a href="<?= base_url('admin/fasilitas/edit/' . base64_encode($t->id_fasilitas)) ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                                    <button type="button" class="btn btn-sm btn-danger del-fasil" data-id="<?= base64_encode($t->id_fasilitas) ?>">Hapus</button>
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
        $(".del-fasil").click(function() {
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
                        url: "<?= base_url('admin/fasilitas/delete/') ?>" + id,
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Berhasil Dihapus',
                                'Data Berhasil dihapus',
                                'success'
                            );
                            window.location = "<?= base_url('admin/fasilitas/') ?>";
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Dihapus',
                                'Data Gagal dihapus',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('admin/fasilitas/') ?>";
                        }
                    });
                }
            });
        });
    });
</script>