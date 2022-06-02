<?php

class Instansi_m extends CI_Model
{
    public function show()
    {
        $this->db->order_by('id', 'DESC');
        $data = $this->db->get('tb_instansi');
        return $data->result();
    }

    public function edit($id)
    {                                            
        return $this->db->get_where('tb_instansi', ['id' => $id])->row();
    }

    public function update($post)
    {
        if($post['gambar'] == NULL){
            $data = [
                'nama_instansi'   => $post['nama_i'],
                'desk_instansi'   => $post['desk'],
                'email'           => $post['email'],
                'alamat'          => $post['alamat'],
                'notelp'          => $post['notelp'],
                'maps_instansi'   => $this->input->post('maps', TRUE)
            ];    
        }else{
            $data = [
                'nama_instansi'   => $post['nama_i'],
                'logo_instansi'   => $post['gambar'],
                'desk_instansi'   => $post['desk'],
                'email'           => $post['email'],
                'alamat'          => $post['alamat'],
                'notelp'          => $post['notelp'],
                'maps_instansi'   => $this->input->post('maps', TRUE)
            ];
        }
        return $this->db->update('tb_instansi', $data, ['id' => $post['id']]);
    }
}