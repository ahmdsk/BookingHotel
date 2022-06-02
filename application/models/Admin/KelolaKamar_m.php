<?php

class KelolaKamar_m extends CI_Model
{
    public function showall()
    {
        $this->db->select('tb_kamar.id_kamar, tb_kamar.no_kamar, tb_tipe_kamar.tipe_kamar, tb_tipe_kamar.harga_kamar, tb_kamar.max_dewasa, tb_kamar.max_anak, tb_kamar.status_kamar, tb_kamar.stok_kamar');
        $this->db->from('tb_kamar');
        $this->db->join('tb_tipe_kamar', 'tb_kamar.id_tipe_kamar = tb_tipe_kamar.id_tipe');
        $this->db->order_by('tb_kamar.id_kamar', 'DESC');
        $data = $this->db->get();
        return $data->result();
    }

    public function showTipeKamar()
    {
        $data = $this->db->get('tb_tipe_kamar');
        return $data;
    }

    public function getNoKamar()
    {
        $data = $this->db->query("SELECT IFNULL(MAX(id_kamar+1), 1) AS no FROM tb_kamar");
        return $data->result();
    }

    public function store($post)
    {
        $data = [
            'no_kamar'      => $post['no_kamar'],
            'max_dewasa'    => $post['max_dewasa'],
            'max_anak'      => $post['max_anak'],
            'status_kamar'  => 1,
            'stok_kamar'    => $post['stok_kamar'],
            'id_tipe_kamar' => $post['tipe_kamar'],
        ];
        return $this->db->insert('tb_kamar', $data);
    }

    public function edit($id)
    {                                            
        return $this->db->get_where('tb_kamar', ['id_kamar' => $id])->row();
    }

    public function update($post)
    {
        $data = [
            'no_kamar'      => $post['no_kamar'],
            'max_dewasa'    => $post['max_dewasa'],
            'max_anak'      => $post['max_anak'],
            'stok_kamar'    => $post['stok_kamar'],
            'id_tipe_kamar' => $post['tipe_kamar'],
        ];
        return $this->db->update('tb_kamar', $data, ['id_kamar' => $post['id']]);
    }

    public function delete($id)
    {
        return $this->db->delete('tb_kamar', ['id_kamar' => $id]);
    }
}
