<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin/KelolaUser_model');
	}

	public function index()
	{
		$data['users'] = $this->KelolaUser_model->show();
		$this->template->load('template', 'v_admin/kelola_user/index', $data);
	}

	public function add()
	{
		$form = $this->form_validation;
		
		$form->set_rules('name', 'nama', 'required');
		$form->set_rules('email', 'email', 'required');
		$form->set_rules('password', 'password', 'required');
		$form->set_rules('notelp', 'no telpon', 'required');
		$form->set_rules('jk', 'jenis kelamin', 'required');
		$form->set_rules('hak', 'hak akses', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$post = $this->input->post(null, TRUE);
	
			if ($this->KelolaUser_model->store($post)) {
				$this->session->set_flashdata('success', 'Berhasil Menambah Data User: '.$post['name']);
				redirect('admin/kelola_user');
			}
		}else{
			$this->template->load('template', 'v_admin/kelola_user/tambah_user');
		}
	}

	public function edit($id)
	{
		$data['user'] = $this->KelolaUser_model->edit(base64_decode($id));

		$form = $this->form_validation;
		
		$form->set_rules('name', 'nama', 'required');
		$form->set_rules('email', 'email', 'required');
		$form->set_rules('notelp', 'no telpon', 'required');
		$form->set_rules('jk', 'jenis kelamin', 'required');
		$form->set_rules('hak', 'hak akses', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$post = $this->input->post(null, TRUE);
	
			if($this->KelolaUser_model->update($post)){
				$this->session->set_flashdata('success', 'Berhasil Mengubah Data User: ' . $post['name']);
				redirect('/admin/kelola_user/');
			}
		}else{
			$this->template->load('template', 'v_admin/kelola_user/edit_user', $data);
		}


	}

	public function delete($id)
	{
		if ($this->KelolaUser_model->delete(base64_decode($id))) {
			$this->session->set_flashdata('success', 'Berhasil Menghapus Data User');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Data User');
		}
		redirect('/admin/kelola_user/');
	}
}
