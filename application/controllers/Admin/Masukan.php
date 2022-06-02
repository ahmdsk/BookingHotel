<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masukan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Masukan_m');
	}

	public function index()
	{
		$data['masukan'] = $this->Masukan_m->show();
		$this->template->load('template', 'v_admin/masukan/index', $data);
	}

    public function add()
    {
        $post = $this->input->post(null, TRUE);
        if($this->Masukan_m->store($post)){
			$this->session->set_flashdata('success', 'Berhasil Menghapus Masukan User');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Masukan User');
		}
        redirect(base_url('contact'));
    }

	public function delete($id)
	{
		$masukan = $this->Masukan_m->detail(base64_decode($id));
		
		if ($this->Masukan_m->delete(base64_decode($id))) {
			$this->session->set_flashdata('success', 'Berhasil Memberikan Masukan');
		} else {
			$this->session->set_flashdata('error', 'Gagal Memberikan Masukan');
		}
		redirect('/admin/masukan/');
	}
}
