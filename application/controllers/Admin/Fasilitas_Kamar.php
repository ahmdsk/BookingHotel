<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_Kamar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin/Fasilitas_m');
	}

	public function index()
	{
		$data['tipe'] = $this->Fasilitas_m->show();
		$this->template->load('template', 'v_admin/fasilitas_kamar/index', $data);
	}

	public function add()
	{
		$form = $this->form_validation;

		$form->set_rules('nama_f', 'nama fasilitas', 'required');
		// $form->set_rules('gambar', 'gambar', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if ($form->run() == TRUE) {
			$config['file_name'] 	   = 'img-' . rand();
			$config['upload_path']     = './uploads/';
			$config['allowed_types']   = 'svg|jpg|png|jpeg';
			$config['max_size']        = 3072;

			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);

			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('admin/fasilitas/add');
			} else {
				$img = $this->upload->data();
				$post['gambar'] = base_url('uploads/' . $img['file_name']);

				if ($this->Fasilitas_m->store($post)) {
					$this->session->set_flashdata('success', 'Berhasil Menambah Fasilitas Kamar: ' . $post['nama_f']);
					redirect('admin/fasilitas');
				}
			}
		} else {
			$this->template->load('template', 'v_admin/fasilitas_kamar/tambah_fasilitas');
		}
	}

	public function edit($id)
	{
		$data['tipe'] = $this->Fasilitas_m->detail(base64_decode($id));

		$form = $this->form_validation;

		$form->set_rules('nama_f', 'nama fasilitas', 'required');
		// $form->set_rules('gambar', 'gambar', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if ($form->run() == TRUE) {
			$config['file_name'] 	   = 'img-' . rand();
			$config['upload_path']     = './uploads/';
			$config['allowed_types']   = 'svg|jpg|png|jpeg';
			$config['max_size']        = 3072;

			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);

			if (!$this->upload->do_upload('gambar')) {
				if ($this->Fasilitas_m->update($post)) {
					$this->session->set_flashdata('success', 'Berhasil Mengubah Fasilitas Kamar: ' . $post['nama_f']);
					redirect('admin/fasilitas');
				}
			} else {
				$img = $this->upload->data();
				// delete gambar lama
				$x = explode(base_url(), $data['tipe']->gambar_fasilitas);
				unlink(end($x));

				// upload gambar baru
				$post['gambar'] = base_url('uploads/' . $img['file_name']);

				if ($this->Fasilitas_m->update($post)) {
					$this->session->set_flashdata('success', 'Berhasil Mengubah Fasilitas Kamar: ' . $post['nama_f']);
					redirect('admin/fasilitas');
				}
			}
		} else {
			$this->template->load('template', 'v_admin/fasilitas_kamar/edit_fasilitas', $data);
		}
	}

	public function delete($id)
	{
		$tipe = $this->Fasilitas_m->detail(base64_decode($id));
		
		if ($this->Fasilitas_m->delete(base64_decode($id))) {
			// hapus gambar
			$x = explode(base_url(), $tipe->gambar_fasilitas);
			unlink(end($x));

			$this->session->set_flashdata('success', 'Berhasil Menghapus Data User');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Data User');
		}
		redirect('/admin/fasilitas/');
	}
}
