<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Home_m');
	}

	public function index()
	{
		$data['title'] = 'Hiroto Hotel';
		$data['kamar'] = $this->Home_m->getKamar();
		$data['fasilitas'] = $this->Home_m->getfasilitas();
		$data['galeri'] = $this->Home_m->getGaleri();
		$data['instansi'] = $this->Home_m->getInstansi();

		$this->template->load('template_utama', 'home', $data);
	}

	// tipe kamar
	public function rooms()
	{
		$data['title'] = 'Rooms';
		$data['kamar'] = $this->Home_m->getKamar();
		$data['instansi'] = $this->Home_m->getInstansi();

		$this->template->load('template_utama', 'rooms', $data);
	}

	// tipe kamar detail
	public function room_detail($id)
	{
		$data['kamar'] 	  = $this->Home_m->getKamarDetail(base64_decode($id));
		$data['title']    = 'Detail ' . $data['kamar']->tipe_kamar;
		$data['instansi'] = $this->Home_m->getInstansi();
		$data['rating']   = $this->Home_m->getRating(base64_decode($id));

		$this->template->load('template_utama', 'room_detail', $data);
	}

	public function room()
	{
		$get = $this->input->get(null, TRUE);

		$data['title'] = 'Room';
		$data['instansi'] = $this->Home_m->getInstansi();
		$data['kamar'] = $this->Home_m->filterKamar($get);

		$this->template->load('template_utama', 'room', $data);
	}

	public function room_booking($id)
	{
		$data['title'] = 'Booking';
		$data['instansi'] = $this->Home_m->getInstansi();
		$data['kamar'] = $this->Home_m->getDetailKamar(base64_decode($id));

		$form = $this->form_validation;
		$form->set_rules('check_in', 'Check In', 'required');
		$form->set_rules('check_out', 'Check Out', 'required');
		$form->set_rules('nama', 'Nama', 'required');
		$form->set_rules('noident', 'No Identitas', 'required');
		$form->set_rules('email', 'Email', 'required');
		$form->set_rules('notelp', 'No Telp.', 'required');
		$form->set_rules('jk', 'Jenis Kelamin', 'required');
		$form->set_rules('alamat', 'Alamat', 'required');
		$form->set_rules('jml_kamar', 'Jumlah Kamar', 'required');

		$form->set_message('required', 'kolom %s wajib di isi!');

		if($form->run() == TRUE){
			$post = $this->input->post(null, TRUE);
			$post['id'] = $post['id_kamar'];

			// cari data untuk ulasan
			$getKamar = $this->Home_m->getDetailKamar($post['id']);
			$getTipeKamar = $this->Home_m->getKamarDetail($getKamar->id_tipe_kamar);
			if($this->Home_m->pesan($post)){
				$this->Home_m->tambahTamu($post);
				if($this->Home_m->kurangStokHotel($post)){
					$this->session->set_flashdata('success', 'Pesanan Berhasil');
					redirect('room/booking_success/'.base64_encode($post['id']));
				}else{
					$this->session->set_flashdata('error', 'Stok Kamar Tidak Cukup');
					redirect('room/booking/'.base64_encode($post['id']));
				}
			}
		}else{
			$this->template->load('template_utama', 'room_booking', $data);
		}
	}

	public function booking_success($id)
	{
		$pesanan = $this->Home_m->getPesanan();
		$data['title'] = 'Room';
		$data['instansi'] = $this->Home_m->getInstansi();
		$data['bukti'] = $this->Home_m->bukti($pesanan->id_pesanan);

		$this->template->load('template_utama', 'success_booking', $data);
	}

	public function bukti($id){
		$data['bukti'] = $this->Home_m->bukti($id);
		$data['kamar'] = $this->Home_m->getDetailKamar($data['bukti']->id_kamar);
		$data['tipe']  = $this->Home_m->getKamarDetail($data['kamar']->id_tipe_kamar);
		$this->load->view('bukti_pesanan', $data);
	}

	public function booking_rate($idpesanan){
		$rate       = $this->input->post('rating');
		$masukan    = $this->input->post('masukan');
		$getPesanan = $this->Home_m->getDetailPesanan($idpesanan);
		$getKamar   = $this->Home_m->getDetailKamar($getPesanan->id_kamar);
		$getTipe    = $this->Home_m->getKamarDetail($getKamar->id_tipe_kamar);

		$data = [
			"email"   => $getPesanan->email,
			"rating"  => $rate,
			"masukan" => $masukan,
			"id_tipe" => $getTipe->id_tipe
		];

		if($this->Home_m->rating($data)){
			$this->session->set_flashdata('success', 'Berhasil Memberi Rating');
			$this->session->set_userdata('rating', '1');
			redirect('room/booking_success/'.base64_encode($getPesanan->id_pesanan));
		}
	}

	public function about()
	{
		$data['title'] = 'About Us';
		$data['fasilitas'] = $this->Home_m->getfasilitas();
		$data['instansi'] = $this->Home_m->getInstansi();

		$this->template->load('template_utama', 'about', $data);
	}

	public function contact()
	{
		$data['title'] = 'Contact Hiroto';
		$data['instansi'] = $this->Home_m->getInstansi();
		$data['instansi'] = $this->Home_m->getInstansi();

		$this->template->load('template_utama', 'contact', $data);
	}
}
