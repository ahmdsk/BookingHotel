<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Bukti Pemesanan</title>
  </head>
  <body>
      
    <div class="container mt-5">
        <h3>Bukti Reservasi Hiroto Hotel</h3>
        <p>Jl. ZA. Pagar Alam No.199, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35133</p>
        <hr>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="row" style="width: 175px">Reservasi Pada</th>
                    <td>:</td>
                    <td><?= date('Y-m-d', strtotime($bukti->created_at)) ?></td>
                    <th scope="row" style="width: 175px">Nama Lengkap</th>
                    <td>:</td>
                    <td><?= $bukti->nama_lengkap ?></td>
                </tr>
                <tr>
                    <th scope="row" style="width: 175px">Tanggal Check In</th>
                    <td>:</td>
                    <td><?= date('Y-m-d', strtotime($bukti->cek_in)) ?></td>
                    <th scope="row" style="width: 175px">Alamat : </th>
                    <td>:</td>
                    <td style="max-width: 175px"><?= $bukti->alamat ?></td>
                </tr>
                <tr>
                    <th scope="row" style="width: 175px">Tanggal Check Out</th>
                    <td>:</td>
                    <td><?= date('Y-m-d', strtotime($bukti->cek_out)) ?></td>
                    <th scope="row" style="width: 175px">No Telp</th>
                    <td>:</td>
                    <td><?= $bukti->notelp ?></td>
                </tr>
                <tr>
                    <th scope="row" style="width: 175px">Jumlah Kamar</th>
                    <td>:</td>
                    <td><?= $bukti->jumlah_kamar ?> Kamar</td>
                    <th scope="row" style="width: 175px">Harga Kamar/Hari</th>
                    <td>:</td>
                    <td><?= 'Rp. '.number_format($tipe->harga_kamar) ?></td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No Kamar</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Harga Kamar</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $kamar->no_kamar ?></td>
                    <td><?= $tipe->tipe_kamar ?></td>
                    <td>
                        <?php 
                            $total = $tipe->harga_kamar * $bukti->jumlah_kamar;
                            echo 'Rp. '.number_format($total);
                        ?>
                    </td>
                    <td>
                        <?php if($bukti->status == 0){ ?>
                            <span class="badge badge-danger">Belum Dikonfirmasi</span>
                        <?php }else{ ?>
                            <div class="badge badge-success">Sudah Dikonfirmasi</div>
                        <?php } ?>
                    </td>
                    </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-end align-items-center mt-5">
            <div class="text-center">
                <h5>Hormat Kami,</h5>
                <br><br>
                <p>Resepsionis</p>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>