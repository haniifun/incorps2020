<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "In Corporation : Jasa Rental, Desain, Cetak dan Install Berkualitas";

		$data['install'] = $this->db->get('install')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('install/index');
		$this->load->view('templates/footer');
	}

	public function order($id)
	{

		$data['install'] = $this->db->get_where('install',['id_install' => $id])->row_array();
	
		$data['title'] = $data['install']['jenis_install']." | In Corporation : Jasa Rental, install, Cetak, dan Install Berkualitas";

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');


		if($this->form_validation->run() == false)	{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('install/order');
			$this->load->view('templates/footer');
		} else {
			$nama = htmlspecialchars($this->input->post('nama',true));
			$tanggal = htmlspecialchars($this->input->post('tanggal',true));
			$jam = htmlspecialchars($this->input->post('jam',true));
			$deskripsi = htmlspecialchars($this->input->post('deskripsi',true));

			redirect("https://api.whatsapp.com/send?phone=6282135462174&text=Hallo, Admin.. %0ASaya ingin order jasa Install-In dengan rincian sebagai berikut. %0A%0AJenis install : ".$data['install']['jenis_install']."%0AYang ingin diinstall : ".$deskripsi."%0ADiinstall pada : ".$tanggal." / ".$jam."%0A%0ATerimakasih..");
		}
	}
}
