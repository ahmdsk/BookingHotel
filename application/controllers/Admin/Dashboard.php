<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->model('Admin/Dashboard_m');
	}

	public function index()
	{
		$data['pendapatan'] = $this->Dashboard_m->sallary();
		$data['masukan'] = $this->Dashboard_m->masukan();
		$data['kamar'] = $this->Dashboard_m->kamar();
		$data['fasilitas'] = $this->Dashboard_m->fasilitas();
		$this->template->load('template', 'v_admin/index', $data);
	}
}
