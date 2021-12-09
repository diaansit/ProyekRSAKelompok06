<?php 

class Home extends CI_Controller {
 	public function __construct(){
 		parent:: __construct();
 		$this->load->library('form_validation');

 	}
 	public function index(){

 		$data['judul'] = 'Login';
 		$this->load->model('Model_Home');
 		$this->load->view('templates/header', $data);
 		$this->load->view('templates/footer');

  	}


  	public function tambah(){
  		
  		$data2['judul'] = 'Registrasi';
  		$this->load->model('Model_Home');

  		$this->form_validation->set_rules('username', 'Username', 'required');
  		$this->form_validation->set_rules('phone', 'Phone number', 'required');
  		$this->form_validation->set_rules('email', 'Email', 'required');
  		$this->form_validation->set_rules('password', 'Passsword', 'required');
  		$this->form_validation->set_rules('tanggal', 'Tanggal lahir', 'required');
  		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
  		$this->form_validation->set_rules('kota', 'Kota', 'required');

  		if($this->form_validation->run() == FALSE){
  			$this->load->view('templates/kepala');
  			$this->load->view('templates/tambah', $data2);
  			$this->load->view('templates/footer');
  		}
  		else{
  			$this->Model_Home->tambahAkun();
  			$this->session->set_flashdata('flash', 'Berhasil Register!');
  			redirect('Home');
  		}
  	}

}
 ?>


