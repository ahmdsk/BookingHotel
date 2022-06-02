<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tipe_Kamar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin/TipeKamar_m');
	}

	public function index()
	{
		$data['tipe'] = $this->TipeKamar_m->show();
		$this->template->load('template', 'v_admin/tipe_kamar/index', $data);
	}
	
	// public function fasilitas($id)
	// {
	// 	$data['fasil'] = $this->TipeKamar_m->detail(base64_decode($id));
	// 	$this->template->load('template', 'v_admin/tipe_kamar/detail', $data);
	// }

	public function add()
	{
		$form = $this->form_validation;
		
		$form->set_rules('tipe', 'tipe kamar', 'required');
		$form->set_rules('harga', 'harga', 'required');
		$form->set_rules('desk', 'deskripsi', 'required');
		// $form->set_rules('gambar', 'gambar', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$config['file_name'] 	   = 'img-' . rand();
			$config['upload_path']     = './uploads/kamar/';
			$config['allowed_types']   = 'svg|jpg|png|jpeg';
			$config['max_size']        = 3072;

			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);
	
			if(!$this->upload->do_upload('gambar')){
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('admin/tipe_kamar');
			}else{
				$img = $this->upload->data();
				$post['gambar'] = base_url('uploads/kamar/' . $img['file_name']);
				if ($this->TipeKamar_m->store($post)) {
					$this->session->set_flashdata('success', 'Berhasil Menambah Tipe Kamar: '.$post['tipe']);
					redirect('admin/tipe_kamar');
				}
			}
		}else{
			$this->template->load('template', 'v_admin/tipe_kamar/tambah_tipekamar');
		}
	}

	public function edit($id)
	{
		$data['tipe'] = $this->TipeKamar_m->edit(base64_decode($id));

		$form = $this->form_validation;
		
		$form->set_rules('tipe', 'tipe kamar', 'required');
		$form->set_rules('harga', 'harga', 'required');
		$form->set_rules('desk', 'deskripsi', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$config['file_name'] 	   = 'img-' . rand();
			$config['upload_path']     = './uploads/kamar/';
			$config['allowed_types']   = 'svg|jpg|png|jpeg';
			$config['max_size']        = 3072;

			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);
			
			if(!$this->upload->do_upload('gambar')){
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('admin/tipe_kamar');
			}else{
				$img = $this->upload->data();
				$x = explode(base_url(), $data['tipe']->gambar_kamar);
				unlink(end($x));

				$post['gambar'] = base_url('uploads/kamar/' . $img['file_name']);
				if ($this->TipeKamar_m->update($post)) {
					$this->session->set_flashdata('success', 'Berhasil Mengedit Tipe Kamar: '.$post['tipe']);
					redirect('admin/tipe_kamar');
				}
			}
		}else{
			$this->template->load('template', 'v_admin/tipe_kamar/edit_tipekamar', $data);
		}
	}

	public function delete($id)
	{
		if ($this->TipeKamar_m->delete(base64_decode($id))) {
			$this->session->set_flashdata('success', 'Berhasil Menghapus Data User');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Data User');
		}
		redirect('/admin/tipe_kamar/');
	}
}
