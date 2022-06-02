<?php

class Pemesanan_m extends CI_Model {
    public function get()
    {
        $this->db->from('tb_pesanan');
        $this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_pesanan.id_kamar');
        $this->db->join('tb_tipe_kamar', 'tb_tipe_kamar.id_tipe = tb_kamar.id_tipe_kamar');
        $this->db->order_by('tb_pesanan.id_pesanan', 'DESC');
        $data = $this->db->get();
        return $data->result();
    }

    public function edit($id, $konfir)
    {
        $data = [
            'status' => $konfir
        ];
        return $this->db->update('tb_pesanan', $data, ['id_pesanan' => $id]);
    }

    public function getRating()
    {
        $data = $this->db->query("SELECT * FROM tb_ulasan INNER JOIN tb_tipe_kamar ON tb_ulasan.id_tipe=tb_tipe_kamar.id_tipe");
        return $data->result();
    }

    public function delete_rat($id)
    {
        return $this->db->delete('tb_ulasan', ['id_ulasan' => $id]);
    }
}