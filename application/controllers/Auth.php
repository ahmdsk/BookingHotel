<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->library('form_validation');
	}

	function set_session($user)
    {
        $u_session = [
            'email' => $user->email,
            'nama'  => $user->nama_lengkap,
            'hak'   => $user->hak_akses,
        ];
        return $this->session->set_userdata($u_session);
    }

	public function login()
	{
		$form = $this->form_validation;
		$form->set_rules('email', 'email', 'required');
		$form->set_rules('password', 'password', 'required');
	
		$form->set_message('required', 'Kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$post = $this->input->post(null, TRUE);
			$user = $this->Auth_model->login($post);

			if($user){
				if($user->hak_akses == 0){
					$this->set_session($user);
					redirect('admin');
				}elseif($user->hak_akses == 1){
					$this->set_session($user);
					redirect('resepsionis');
				}elseif($user->hak_akses == 2){
					$this->set_session($user);
					redirect('user');
				}
				$this->session->set_flashdata('success', 'Berhasil Login!');
			}else{
				$this->session->set_flashdata('error', 'Email Atau Password Salah!');
				redirect('auth/login');
			}
		}else{
			$this->load->view('login');
		}
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function proses_register()
	{
		$this->form_validation->set_rules('firstname', 'firstname', 'required');
		$this->form_validation->set_rules('lastname', 'lastname', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$firstname   = $this->input->post('firstname');
			$lastname 	 = $this->input->post('lastname');
			$phone 	 	 = $this->input->post('phone');
			$gender 	 = $this->input->post('gender');
			$email 		 = $this->input->post('email');
			$password	 = $this->input->post('password');

			// $first, $last, $email, $pass, $telp, $jk
			$this->Auth_model->register($firstname, $lastname, $email, $password, $phone, $gender);
			$this->session->set_flashdata('success', 'Proses Pendaftaran User Berhasil, Silahkan login!');
			redirect('dashboard');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('auth/register');
		}
	}

	public function logout()
	{
		$this->Auth_model->logout();
		$this->session->set_flashdata('success', 'Anda Berhasil Logout');
		redirect('auth/login');
	}
}
