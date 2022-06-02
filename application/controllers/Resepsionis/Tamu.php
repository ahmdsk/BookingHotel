<?php

class Tamu extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Resepsionis/Tamu_m');
    }

    public function index()
    {
        $data['tamu'] = $this->Tamu_m->get();
        $this->template->load('template', 'v_resepsionis/tamu/index', $data);
    }

    public function delete($id)
    {
        $this->Tamu_m->delete(base64_decode($id));
    }
}