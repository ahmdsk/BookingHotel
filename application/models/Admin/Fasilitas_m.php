<?php

class Fasilitas_m extends CI_Model
{
    public function show()
    {
        $data = $this->db->get('tb_fasilitas_kamar');
        return $data->result();
    }

    public function detail($id)
    {                                            
        return $this->db->get_where('tb_fasilitas_kamar', ['id_fasilitas' => $id])->row();
    }

    public function store($post)
    {
        $data = [
            'nama_fasilitas'   => $post['nama_f'],
            'gambar_fasilitas' => $post['gambar'],
            'desk_fasilitas'   => $post['desk'],
        ];
        return $this->db->insert('tb_fasilitas_kamar', $data);
    }
    
    public function update($post)
    {
        $data = [
            'nama_fasilitas'   => $post['nama_f'],
            'gambar_fasilitas' => $post['gambar'],
            'desk_fasilitas'   => $post['desk'],
        ];
        return $this->db->update('tb_fasilitas_kamar', $data, ['id_fasilitas' => $post['id']]);
    }

    public function delete($id)
    {
        return $this->db->delete('tb_fasilitas_kamar', ['id_fasilitas' => $id]);
    }
}