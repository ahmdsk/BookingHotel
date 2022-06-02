<?php

class Masukan_m extends CI_Model
{
    public function show()
    {
        $data = $this->db->get('tb_masukan');
        return $data->result();
    }

    public function detail($id)
    {                                            
        return $this->db->get_where('tb_masukan', ['id_masukan' => $id])->row();
    }

    public function store($post)
    {
        $data = [
            'nama_user' => $post['nama'], 
            'email_user' => $post['email'], 
            'masukan' => $post['msg']
        ];
        return $this->db->insert('tb_masukan', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('tb_masukan', ['id_masukan' => $id]);
    }
}