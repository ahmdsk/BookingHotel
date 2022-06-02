<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin/Gallery_m');
	}

	public function index()
	{
		$data['galeri'] = $this->Gallery_m->show();
		$this->template->load('template', 'v_admin/galeri/index', $data);
	}

	public function add()
	{
		$form = $this->form_validation;

		$form->set_rules('gambar', 'gambar', 'callback_validate_image');


		if ($form->run() == FALSE) {
			$this->template->load('template', 'v_admin/galeri/tambah_galeri');
		} else {
			$config['file_name'] 	   = 'galeri-'.rand();
			$config['upload_path']     = './uploads/galeri/';
			$config['allowed_types']   = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);

			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('admin/gallery/add');
			} else {
				$img = $this->upload->data();
				$post['gambar'] = base_url('uploads/galeri/' . $img['file_name']);

				if ($this->Gallery_m->store($post)) {
					$this->session->set_flashdata('success', 'Berhasil Menambah Galeri: ' . $post['gambar']);
					redirect('admin/gallery');
				}
			}
		}
	}

	public function edit($id)
	{
		$data['galeri'] = $this->Gallery_m->detail(base64_decode($id));

		$form = $this->form_validation;

		$form->set_rules('gambar', 'gambar', 'callback_validate_image');

		if ($form->run() == TRUE) {
			$config['file_name'] 	   = 'galeri-'.rand();
			$config['upload_path']     = './uploads/galeri/';
			$config['allowed_types']   = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);

			if (!$this->upload->do_upload('gambar')) {
				if ($this->Gallery_m->update($post)) {
					$this->session->set_flashdata('success', 'Berhasil Mengubah Galeri: ' . $post['gambar']);
					redirect('admin/gallery');
				}
			} else {
				$img = $this->upload->data();
				// delete gambar lama
				$x = explode(base_url(), $data['galeri']->gambar_galeri);
				unlink(end($x));

				// upload gambar baru
				$post['gambar'] = base_url('uploads/galeri/' . $img['file_name']);

				if ($this->Gallery_m->update($post)) {
					$this->session->set_flashdata('success', 'Berhasil Mengubah Galeri: ' . $post['gambar']);
					redirect('admin/gallery');
				}
			}
		} else {
			$this->template->load('template', 'v_admin/galeri/edit_galeri', $data);
		}
	}

	public function delete($id)
	{
		$tipe = $this->Gallery_m->detail(base64_decode($id));

		if ($this->Gallery_m->delete(base64_decode($id))) {
			// hapus gambar
			$x = explode(base_url(), $tipe->gambar_galeri);
			unlink(end($x));

			$this->session->set_flashdata('success', 'Berhasil Menghapus Galeri');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Galeri');
		}
		redirect('/admin/gallery/');
	}

	public function validate_image()
	{
		$check = TRUE;
		if ((!isset($_FILES['gambar'])) || $_FILES['gambar']['size'] == 0) {
			$this->form_validation->set_message('validate_image', 'The {field} field is required');
			$check = FALSE;
		} else if (isset($_FILES['gambar']) && $_FILES['gambar']['size'] != 0) {
			$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
			$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
			$extension = pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION);
			$detectedType = exif_imagetype($_FILES['gambar']['tmp_name']);
			$type = $_FILES['gambar']['type'];
			if (!in_array($detectedType, $allowedTypes)) {
				$this->form_validation->set_message('validate_image', 'Invalid Image Content!');
				$check = FALSE;
			}
			if (filesize($_FILES['gambar']['tmp_name']) > 2097152) {
				$this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 2MB!');
				$check = FALSE;
			}
			if (!in_array($extension, $allowedExts)) {
				$this->form_validation->set_message('validate_image', "Invalid file extension {$extension}");
				$check = FALSE;
			}
		}
		return $check;
	}
}
