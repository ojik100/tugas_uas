<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_wali');
	 if($this->session->userdata('status') != "login"){
			redirect(base_url("Auth"));
		 }
	}
	public function index()
	{
		$data['wali'] = $this->db->query("SELECT tb_alumni.id_alumni,tb_alumni.nama, tb_wali.id_wali,
          tb_wali.nama_ayah, tb_wali.nama_ibuk,
         tb_wali.pekerjaan_ayah,tb_wali.pekerjaan_ibuk,tb_wali.no_wali 
         FROM tb_wali LEFT JOIN tb_alumni ON tb_wali.id_alumni=tb_alumni.id_alumni")->result();
		$this->load->view('admin/wali/index',$data);
	}
	public function tambah()
	{
		$data['siswa'] = $this->db->query("select * from tb_alumni")->result();
		$this->load->view('admin/wali/tambah',$data);
	}
	public function aksi_tambah()
	{
		$id_alumni 	= $this->input->post('id_alumni');
		$nama_ayah 	= $this->input->post('nama_ayah');
		$nama_ibuk 	= $this->input->post('nama_ibuk');
		$pekerjaan_ayah 	= $this->input->post('pekerjaan_ayah');
		$pekerjaan_ibuk 	= $this->input->post('pekerjaan_ibuk');
		$no_wali 	= $this->input->post('no_wali');
		$data = array(
			'id_alumni'  => $id_alumni,
			'nama_ayah' =>$nama_ayah,
			'nama_ibuk' => $nama_ibuk,
			'pekerjaan_ayah' => $pekerjaan_ayah,
			'pekerjaan_ibuk' => $pekerjaan_ibuk,
			'no_wali' => $no_wali,
		);
		$this->M_wali->input_data($data, 'tb_wali');		
		redirect('Wali');
	}
	function hapus($id)
	{
	$where = array('id_wali' => $id);
	$this->M_wali->hapus_data($where,'tb_wali');
	redirect('Wali');
}
public function edit($id)
	{
		$data['siswa'] = $this->db->query("select * from tb_alumni")->result();
		$data['wali'] = $this->db->query("select * from tb_wali where id_wali='$id'")->result();
		$this->load->view('admin/wali/edit',$data);
	}
public function aksi_edit()
    {
	$id_wali 	= $this->input->post('id_wali');
	$id_alumni 	= $this->input->post('id_alumni');
	$nama_ayah 	= $this->input->post('nama_ayah');
	$nama_ibuk 	= $this->input->post('nama_ibuk');
	$pekerjaan_ayah 	= $this->input->post('pekerjaan_ayah');
	$pekerjaan_ibuk 	= $this->input->post('pekerjaan_ibuk');
	$no_wali 	= $this->input->post('no_wali');
	$data = array(
		'id_wali' =>$id_wali,
		'id_alumni'  => $id_alumni,
		'nama_ayah' =>$nama_ayah,
		'nama_ibuk' => $nama_ibuk,
		'pekerjaan_ayah' => $pekerjaan_ayah,
		'pekerjaan_ibuk' => $pekerjaan_ibuk,
		'no_wali' => $no_wali,	
	);
	$where = array(
		'id_wali' =>$id_wali
	);
	$this->M_wali->update_data($where,$data, 'tb_wali');
	redirect('Wali');	
}
}
