<div class="col-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
            <a href="<?= base_url('admin/kelola_kamar/add') ?>" class="btn btn-sm btn-success">Tambah</a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Kamar</th>
                            <th>Tipe Kamar</th>
                            <th>Harga Kamar</th>
                            <th>Stok Kamar</th>
                            <th>Dewasa</th>
                            <th>Anak</th>
                            <th>Status Kamar</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kamar as $k) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $k->no_kamar ?></td>
                                <td><?= $k->tipe_kamar ?></td>
                                <td><?= 'Rp. ' . number_format($k->harga_kamar) ?></td>
                                <td><?= $k->stok_kamar ?></td>
                                <td><?= $k->max_dewasa . ' Orang' ?></td>
                                <td><?= $k->max_anak . ' Orang' ?></td>
                                <td><?php
                                    if ($k->stok_kamar > 0) {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } elseif ($k->stok_kamar <= 0) {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    }
                                    ?></td>
                                <td>
                                    <a href="<?= base_url('admin/kelola_kamar/edit/' . base64_encode($k->id_kamar)) ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                                    <button class="btn btn-sm btn-danger del-kamar" data-id="<?= base64_encode($k->id_kamar) ?>">Hapus</button>
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
        $(".del-kamar").click(function() {
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
                        url: "<?= base_url('admin/kelola_kamar/delete/') ?>" + id,
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Berhasil Dihapus',
                                'Data Berhasil dihapus',
                                'success'
                            );
                            window.location = "<?= base_url('admin/kelola_kamar/') ?>";
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Dihapus',
                                'Data Gagal dihapus',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('admin/kelola_kamar/') ?>";
                        }
                    });
                }
            });
        });
    });
</script>