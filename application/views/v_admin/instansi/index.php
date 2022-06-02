<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Instansi</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th class="text-center">#</th>
                            <th>Instansi</th>
                            <th>Logo</th>
                            <th>Deskripsi</th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($instansi as $i) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $i->nama_instansi ?></td>
                                <td><img src="<?= $i->logo_instansi ?>" alt="<?= $i->nama_instansi ?>" width="120"></td>
                                <td><?= $i->desk_instansi ?></td>
                                <td>
                                    <a href="<?= base_url('admin/instansi/edit/' . base64_encode($i->id)) ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
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