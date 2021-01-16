<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemetaan extends CI_Controller {
	function __construct(){
		parent::__construct();
	/* 	$this->load->model('M_alumni');
	 */
	 if($this->session->userdata('status') != "login"){
			redirect(base_url("Auth"));
		 }
		
	}
	public function index()
	{
		$data['page']='admin/maps/tes';
		$data['alumni'] = $this->db->query("select * from tb_alumni")->result();
		$this->load->view('admin/pemetaan/index',$data);
	}
}
