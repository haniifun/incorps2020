<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "In Corporation : Jasa Rental, Desain, Cetak dan Install Berkualitas";

		$data['cetak'] = $this->db->get('cetak')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('cetak/index');
		$this->load->view('templates/footer');
	}

	public function order($id)
	{

		$data['cetak'] = $this->db->get_where('cetak',['id_cetak' => $id])->row_array();
	
		$data['title'] = $data['cetak']['jenis_cetak']." | In Corporation : Jasa Rental, Desain, Cetak, dan Install Berkualitas";

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');


		if($this->form_validation->run() == false)	{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('cetak/order');
			$this->load->view('templates/footer');
		} else {
			$nama = htmlspecialchars($this->input->post('nama',true));
			$tanggal = htmlspecialchars($this->input->post('tanggal',true));
			$jam = htmlspecialchars($this->input->post('jam',true));
			$jumlah = htmlspecialchars($this->input->post('jumlah',true));

			redirect("https://api.whatsapp.com/send?phone=6282135462174&text=Hallo, Admin.. %0ASaya ingin order Cetak-In dengan rincian sebagai berikut. %0A%0AJenis cetak : ".$data['cetak']['jenis_cetak']."%0Ajumlah : ".$jumlah."%0ADiambil/dikirim pada : ".$tanggal." / ".$jam."%0A%0ATerimakasih..");
		}
	}
}
