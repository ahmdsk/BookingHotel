<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_Kamar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin/KelolaKamar_m');
	}

	public function index()
	{
		$data['kamar'] = $this->KelolaKamar_m->showall();
		$this->template->load('template', 'v_admin/kelola_kamar/index', $data);
	}

	public function add()
	{
		$data['no_kamar'] = $this->KelolaKamar_m->getNoKamar();
		$data['tipe_k']   = $this->KelolaKamar_m->showTipeKamar();

		$form = $this->form_validation;
		$form->set_rules('no_kamar', 'No Kamar', 'required');
		$form->set_rules('tipe_kamar', 'Tipe Kamar', 'required');
		$form->set_rules('max_dewasa', 'maksimal dewasa', 'required');
		$form->set_rules('max_anak', 'maksimal anak', 'required');
		$form->set_rules('stok_kamar', 'stok kamar', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$post = $this->input->post(null, TRUE);
	
			if ($this->KelolaKamar_m->store($post)) {
				$this->session->set_flashdata('success', 'Berhasil Menambah Data Kamar: '.$post['name']);
				redirect('admin/kelola_kamar');
			}
		}else{
			$this->template->load('template', 'v_admin/kelola_kamar/tambah_kamar', $data);
		}
	}

	public function edit($id)
	{
		$data['kamar'] = $this->KelolaKamar_m->edit(base64_decode($id));
		$data['tipe_k']   = $this->KelolaKamar_m->showTipeKamar();

		$form = $this->form_validation;
		$form->set_rules('no_kamar', 'No Kamar', 'required');
		$form->set_rules('tipe_kamar', 'Tipe Kamar', 'required');
		$form->set_rules('max_dewasa', 'maksimal dewasa', 'required');
		$form->set_rules('max_anak', 'maksimal anak', 'required');
		$form->set_rules('stok_kamar', 'stok kamar', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$post = $this->input->post(null, TRUE);
	
			if($this->KelolaKamar_m->update($post)){
				$this->session->set_flashdata('success', 'Berhasil Mengubah Data Kamar: ' . $post['name']);
				redirect('/admin/kelola_kamar/');
			}
		}else{
			$this->template->load('template', 'v_admin/kelola_kamar/edit_kamar', $data);
		}


	}

	public function delete($id)
	{
		if ($this->KelolaKamar_m->delete(base64_decode($id))) {
			$this->session->set_flashdata('success', 'Berhasil Menghapus Data Kamar');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Data Kamar');
		}
		redirect('/admin/kelola_kamar/');
	}
}
