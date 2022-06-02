<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Resepsionis/Pemesanan_m');
    }
    
    public function index()
    {
        $data['pesanan'] = $this->Pemesanan_m->get();
        $this->template->load('template', 'v_resepsionis/pemesanan/index', $data);
    }

    public function edit()
    {
        $this->Pemesanan_m->edit(base64_decode($_POST['id']), $_POST['konfir']);
    }

    public function rating()
    {
        $data['rating'] = $this->Pemesanan_m->getRating();
        $this->template->load('template', 'v_resepsionis/pemesanan/rating' , $data);
    }

    public function delete_rating($id)
    {
        $this->Pemesanan_m->delete_rat($id);
    }
}