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
                            <th>Cek In</th>
                            <th>Cek Out</th>
                            <th>Tipe Kamar</th>
                            <th>No Kamar</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pesanan as $p) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p->nama_lengkap ?></td>
                                <td><?= date('Y-m-d', strtotime($p->cek_in)) ?></td>
                                <td><?= date('Y-m-d', strtotime($p->cek_out)) ?></td>
                                <td><?= $p->tipe_kamar ?></td>
                                <td><?= $p->no_kamar ?></td>
                                <td><?php
                                    $total = $p->harga_kamar * $p->jumlah_kamar;
                                    echo 'Rp. '.number_format($total);
                                ?></td>
                                <td>
                                    <?php if($p->status == 0){ ?>
                                        <button type="button" class="btn btn-sm btn-primary konfir" data-id="<?= base64_encode($p->id_pesanan) ?>">Konfirmasi</button>
                                    <?php }else { ?> 
                                        <a href="<?= base_url('room/bukti_pesanan/'. $p->id_pesanan) ?>" target="_blank" class="btn  btn-sm btn-success">Lihat Bukti</a>
                                    <?php } ?>
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
        $(".konfir").click(function() {
            let id = $(this).data('id');

            console.log(id);

            Swal.fire({
                title: 'Kofirmasi Pemesanan Ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Konfirmasi',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed == true) {
                    $.ajax({
                        url: "<?= base_url('resepsionis/pemesanan/edit/ ') ?>" + id,
                        data: {konfir: 1, id: $(this).data('id')},
                        type: "POST",
                        success: function() {
                            Swal.fire(
                                'Berhasil Dikonfirmasi',
                                'Pesanan Berhasil Dikonfirmasi',
                                'success'
                            );
                            setTimeout(function(){
                                window.location = "<?= base_url('resepsionis/pemesanan') ?>";
                            }, 3000);
                        },
                        error: function(err){
                            Swal.fire(
                                'Gagal Dikonfirmasi',
                                'Pesanan Gagal Dikonfirmasi',
                                'error'
                            );
                            console.log('Ada Error: '+err);
                            // window.location = "<?= base_url('resepsionis/pemesanan') ?>";
                        }
                    });
                }
            });
        });
    });
</script>