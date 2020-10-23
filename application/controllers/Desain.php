<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desain extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "In Corporation : Jasa Rental, Desain, Cetak dan Install Berkualitas";

		$data['desain'] = $this->db->get('desain')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('desain/index');
		$this->load->view('templates/footer');
	}

	public function order($id)
	{

		$data['desain'] = $this->db->get_where('desain',['id_desain' => $id])->row_array();
	
		$data['title'] = $data['desain']['desain']." | In Corporation : Jasa Rental, Desain, Cetak, dan Install Berkualitas";

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('pengerjaan', 'Masa pengerjaan', 'required');
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'required');


		if($this->form_validation->run() == false)	{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('desain/order');
			$this->load->view('templates/footer');
		} else {
			$nama = htmlspecialchars($this->input->post('nama',true));
			$pengerjaan = htmlspecialchars($this->input->post('pengerjaan',true));
			$ukuran = htmlspecialchars($this->input->post('ukuran',true));
			$deskripsi = htmlspecialchars($this->input->post('deskripsi',true));

			redirect("https://api.whatsapp.com/send?phone=6282135462174&text=Hallo, Admin.. %0ASaya ingin order desain dengan rincian sebagai berikut. %0A%0AJenis desain : ".$data['desain']['desain']."%0Aukuran : ".$ukuran."%0AMasa pengerjaan : ".$pengerjaan."%0ADeskripsi : ".$deskripsi."%0A%0ATerimakasih..");
		}
	}
}
