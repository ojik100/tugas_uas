<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_auth');
	
		
	}
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			 
			'username' => $username,
			'password' => $password,
		
			);
		$cek = $this->M_auth->cek_login("tb_admin",$where)->row_array();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				);
			$this->session->set_userdata($data_session);
			echo "<script>
			window.location.href='" . base_url() . "Dashboard';
			</script>";
		}else{
			echo "<script>
			window.location.href='" . base_url() . "Auth';
			</script>";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Auth'));
	}
}
