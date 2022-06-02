<?php

class TipeKamar_m extends CI_Model
{
    public function show()
    {
        $this->db->order_by('id_tipe', 'DESC');
        $data = $this->db->get('tb_tipe_kamar');
        return $data->result();
    }

    // public function tambah_detail()
    // {

    // }

    // public function detail($id)
    // {
    //     // var_dump($id);die;
    //     $this->db->from('tb_tipe_kamar');
    //     $this->db->join('tb_kamar', 'tb_kamar.id_tipe_kamar = tb_tipe_kamar.id_tipe');
    //     $this->db->join('tb_fasilitas', 'tb_fasilitas.id_kamar = tb_kamar.id_kamar');
    //     $this->db->join('tb_fasilitas_kamar', 'tb_fasilitas.id_fasilitas = tb_fasilitas_kamar.id_fasilitas');
    //     $this->db->where('id_tipe', $id);

    //     $data = $this->db->get();
    //     return $data->result();
    // }

    public function store($post)
    {
        $data = [
            'tipe_kamar'   => $post['tipe'],
            'harga_kamar'  => $post['harga'],
            'desk_kamar'   => $post['desk'],
            'gambar_kamar' => $post['gambar']
        ];
        return $this->db->insert('tb_tipe_kamar', $data);
    }

    public function edit($id)
    {                                            
        return $this->db->get_where('tb_tipe_kamar', ['id_tipe' => $id])->row();
    }
    
    public function update($post)
    {
        if($post['gambar'] == null){
            $data = [
                'tipe_kamar'   => $post['tipe'],
                'harga_kamar'  => $post['harga'],
                'desk_kamar'   => $post['desk'],
            ];
        }else {
            $data = [
                'tipe_kamar'   => $post['tipe'],
                'harga_kamar'  => $post['harga'],
                'desk_kamar'   => $post['desk'],
                'gambar_kamar' => $post['gambar']
            ];
        }
        return $this->db->update('tb_tipe_kamar', $data, ['id_tipe' => $post['id']]);
    }

    public function delete($id)
    {
        return $this->db->delete('tb_tipe_kamar', ['id_tipe' => $id]);
    }
}