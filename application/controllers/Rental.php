<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "Rental-In | In Corporation : Jasa Rental, Desain, Cetak, dan Install Berkualitas";

		$this->db->select('*');
		$this->db->from('rental');
		$this->db->join('rental_harga','rental.id_barang=rental_harga.id_barang');
		$data['rental']	= $this->db->get()->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('rental/index');
		$this->load->view('templates/footer');
	}

	public function order($url)
	{
		$this->db->select('*');
		$this->db->from('rental');
		$this->db->join('rental_harga','rental.id_barang=rental_harga.id_barang');
		$this->db->where('url',$url);
		$data['rental'] = $this->db->get()->row_array();

		$data['spesifikasi'] = explode(',', $data['rental']['spesifikasi']);

		$data['title'] = $data['rental']['barang']." | In Corporation : Jasa Rental, Desain, Cetak, dan Install Berkualitas";

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah item', 'required|trim');


		if($this->form_validation->run() == false)	{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('rental/order');
			$this->load->view('templates/footer');
		} else {
			$nama = htmlspecialchars($this->input->post('nama',true));
			$whatsapp = htmlspecialchars($this->input->post('whatsapp',true));
			$tanggal = htmlspecialchars($this->input->post('tanggal',true));
			$jam = htmlspecialchars($this->input->post('jam',true));
			$durasi = htmlspecialchars($this->input->post('durasi',true));
			$jumlah = htmlspecialchars($this->input->post('jumlah',true));
			$pengambilan = htmlspecialchars($this->input->post('antar',true));

			redirect("https://api.whatsapp.com/send?phone=6282135462174&text=Hallo, Admin.. %0ASaya ingin rental barang dengan rincian sebagai berikut. %0A%0ABarang : ".$data['rental']['barang']."%0AJumlah : ".$jumlah."%0ADurasi pemakaian : ".$durasi."%0ATanggal : ".$tanggal."%0AJam : ".$jam."%0ANama penyewa : ".$nama."%0A%0ATerimakasih..");
		}
	}
}
