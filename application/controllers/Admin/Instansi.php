<?php

class Instansi extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin/Instansi_m');
	}

    public function index()
    {
        $data['instansi'] = $this->Instansi_m->show();
		$this->template->load('template', 'v_admin/instansi/index', $data);
    }

    public function edit($id)
    {
        $data['instansi'] = $this->Instansi_m->edit(base64_decode($id));

		$form = $this->form_validation;
		
		$form->set_rules('nama_i', 'nama instansi', 'required');
		$form->set_rules('desk', 'deskripsi', 'required');
		$form->set_rules('email', 'email', 'required');
		$form->set_rules('alamat', 'alamat', 'required');
		$form->set_rules('notelp', 'no telpon', 'required');
		$form->set_rules('maps', 'maps', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
            $config['file_name'] 	   = 'img-' . rand();
			$config['upload_path']     = './uploads/instansi/';
			$config['allowed_types']   = 'svg|jpg|png|jpeg';
			$config['max_size']        = 3072;

			$this->load->library('upload', $config);

			$post = $this->input->post(null, TRUE);
	
            if (!$this->upload->do_upload('gambar')) {
                if ($this->Instansi_m->update($post)) {
                    $this->session->set_flashdata('success', 'Berhasil Mengedit Data Instansi: '.$post['nama_i']);
                    redirect('admin/instansi');
                }
            } else {
				$img = $this->upload->data();
				// delete gambar lama
				$x = explode(base_url(), $data['instansi']->logo_instansi);
				unlink(end($x));

				// upload gambar baru
				$post['gambar'] = base_url('uploads/instansi/' . $img['file_name']);

				if ($this->Instansi_m->update($post)) {
					$this->session->set_flashdata('success', 'Berhasil Mengedit Data Instansi: '.$post['nama_i']);
					redirect('admin/instansi');
				}
			}
		}else{
			$this->template->load('template', 'v_admin/instansi/edit_instansi', $data);
		}
    }
}