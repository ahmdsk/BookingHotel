<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Fasilitas Kamar</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Gambar</th>
                            <th>Nama Fasilitas</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($fasil as $f) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <!-- <td><img src="<?= $f->gambar_kamar ?>" alt="<?= $f->tipe_kamar ?>" width="120"></td> -->
                                <td><?= $f->desk_kamar ?></td>
                                <td width="20%">
                                    <a href="<?= base_url('admin/tipe_kamar/edit/' . base64_encode($f->id_tipe)) ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                                    <button type="button" class="btn btn-sm btn-danger del-tipe" data-id="<?= base64_encode($f->id_tipe) ?>">Hapus</button>
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
        $(".del-tipe").click(function() {
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
                        url: "<?= base_url('admin/tipe_kamar/delete/') ?>" + id,
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Berhasil Dihapus',
                                'Data Berhasil dihapus',
                                'success'
                            );
                            window.location = "<?= base_url('admin/tipe_kamar/') ?>";
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Dihapus',
                                'Data Gagal dihapus',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('admin/tipe_kamar/') ?>";
                        }
                    });
                }
            });
        });
    });
</script>