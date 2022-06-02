<?php

class Tamu_m extends CI_Model {
    public function get()
    {
        $data = $this->db->get('tb_tamu');
        return $data->result();
    }

    public function delete($id)
    {
        return $this->db->delete('tb_tamu', ['id_tamu' => $id]);
    }
}