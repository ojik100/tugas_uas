<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	
	 if($this->session->userdata('status') != "login"){
			redirect(base_url("Auth"));
		 }
		
	}
	public function index()
	{
		$data['alumni'] = $this->db->query("select * from tb_alumni")->num_rows();
		$data['kecamatan'] = $this->db->query("select * from tb_kecamatan")->num_rows();
		$data['kabupaten'] = $this->db->query("select * from tb_kabupaten")->num_rows();
		$data['provinsi'] = $this->db->query("select * from tb_provinsi")->num_rows();
		
		$data['wali'] = $this->db->query("select * from tb_wali")->num_rows();
		$this->load->view('admin/index',$data);
	}
	
}
