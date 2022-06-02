<?php

class KelolaUser_model extends CI_Model {
    private $table = 'tb_users';

    public function show()
    {
        $data = $this->db->get($this->table);
        return $data->result();
    }

    public function store($post)
    {
        $data = [
            'nama_lengkap'  => $post['name'],
            'email'         => $post['email'],
            'password'      => $post['password'],
            'no_telp'       => $post['notelp'],
            'jenis_kelamin' => $post['jk'],
            'hak_akses'     => $post['hak'],
            'created_at'    => date('Y-m-d h:i:s')
        ];
        return $this->db->insert($this->table, $data);
    }

    public function edit($id)
    {                                            
        return $this->db->get_where($this->table, ['id_user' => $id])->row();
    }

    public function update($post)
    {
        $data = [                                                                                                                                                                                                               
            'nama_lengkap'  => $post['name'],
            'email'         => $post['email'],
            'hak_akses'     => $post['hak'],
            'no_telp'       => $post['notelp'],
            'jenis_kelamin' => $post['jk'],
        ];
        return $this->db->update($this->table, $data, ['id_user' => $post['iduser']]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id_user' => $id]);
    }
}