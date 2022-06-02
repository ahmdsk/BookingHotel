<?php

class Dashboard_m extends CI_Model
{
    public function sallary()
    {
        $data = $this->db->query("SELECT SUM(harga_kamar * jumlah_kamar) AS TotalKeseluruhan FROM tb_pesanan INNER JOIN tb_kamar ON tb_kamar.id_kamar = tb_pesanan.id_kamar INNER JOIN tb_tipe_kamar ON tb_tipe_kamar.id_tipe = tb_kamar.id_tipe_kamar WHERE tb_pesanan.status = 1");
        return $data->row();
    }

    public function masukan()
    {
        $data = $this->db->get('tb_masukan');
        return $data->num_rows();
    }

    public function kamar()
    {
        $data = $this->db->get('tb_kamar');
        return $data->num_rows();
    }

    public function fasilitas()
    {
        $data = $this->db->get('tb_fasilitas_kamar');
        return $data->num_rows();
    }
}