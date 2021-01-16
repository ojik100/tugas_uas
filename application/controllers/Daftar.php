<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_daftar');
	
	
		
	}
	public function aksi()
	{
		$nis 	= $this->input->post('nis');
		$nama 	= $this->input->post('nama');
		$id_jur 	= $this->input->post('id_jur');
		$password 	= $this->input->post('password');
	
		
		$data = array(
			'nis'  => $nis,
			'nama' =>$nama,
			'id_jur' =>$id_jur,
			'password' => $password,
		
			
		);
		
		$this->M_daftar->input_data($data, 'tb_alumni');
		
		redirect('User');
		
	}
	
	
}
