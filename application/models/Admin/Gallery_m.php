<?php

class Gallery_m extends CI_Model
{
    public function show()
    {
        $this->db->order_by('id_galeri', 'DESC');
        $data = $this->db->get('tb_galeri');
        return $data->result();
    }

    public function detail($id)
    {                                            
        return $this->db->get_where('tb_galeri', ['id_galeri' => $id])->row();
    }

    public function store($post)
    {
        $data = [
            'gambar_galeri' => $post['gambar'],
        ];
        return $this->db->insert('tb_galeri', $data);
    }
    
    public function update($post)
    {
        $data = [
            'gambar_galeri' => $post['gambar'],
        ];
        return $this->db->update('tb_galeri', $data, ['id_galeri' => $post['id']]);
    }

    public function delete($id)
    {
        return $this->db->delete('tb_galeri', ['id_galeri' => $id]);
    }
}