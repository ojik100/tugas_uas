<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_info');		
	}
	public function index()
	{
		$data['info'] = $this->db->query("select * from tb_info order by id_info")->result();
		$this->load->view('admin/info/index',$data);
	}
	public function create()
	{
		$this->load->view('admin/info/create');
	}
	public function edit($id)
	{
		$data['info'] = $this->db->query("select * from tb_info where id_info ='$id' ")->result();
		$this->load->view('admin/info/edit',$data);
	}
	public function aksi_tambah()
	{
		$nama_info 	= $this->input->post('nama_info');
		$gambar  = $_FILES['gambar'];
		$info 	= $this->input->post('info');
		if ($gambar =''){}else{
			$config['upload_path']		='./upload/info';
			$config['allowed_types']		='jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gagal"; die();
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(	
			'nama_info' => $nama_info,
			'gambar' => $gambar,
			'info' => $info,
		);
		$this->M_info->input_data($data, 'tb_info');
		redirect('Info');
	}
	public function aksi_edit()
	{
		$id_info 	= $this->input->post('id_info');
		$nama_info 	= $this->input->post('nama_info');
		$gambar  = $_FILES['gambar'];
		$info 	= $this->input->post('info');
		if ($gambar =''){}else{
			$config['upload_path']		='./upload/info';
			$config['allowed_types']		='jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gagal"; die();
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array(
			'id_info' => $id_info,
			'nama_info' => $nama_info,
			'gambar' => $gambar,
			'info' => $info,	
		);
			$where = array(
			'id_info' =>$id_info
		);
		$this->M_info->update_data($where,$data, 'tb_info');
		redirect('Info');
	}
	function hapus($id)
	{
	$where = array('id_info' => $id);
	$this->M_info->hapus_data($where,'tb_info');
	redirect('Info');
}
}