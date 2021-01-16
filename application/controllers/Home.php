<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_lengkapi');
	 if($this->session->userdata('status') != "login"){
			redirect(base_url("User"));
		 }
	}
	public function index()
	{
		$data['jumlah_info'] = $this->db->query("select * from tb_info")->num_rows();
		$data['info'] = $this->db->query("select * from tb_info order by id_info")->result();
        if($this->session->userdata('id_alumni')){
        $where= $this->session->userdata('id_alumni');
        $data['kecamatan']	= $this->db->query("select * from tb_kecamatan")->result();
		$data['kabupaten'] 	= $this->db->query("select * from tb_kabupaten")->result();
		$data['provinsi'] 	= $this->db->query("select * from tb_provinsi")->result();
		$data['jurusan'] 	= $this->db->query("select * from tb_jurusan ")->result();
        $data['alumni'] 	= $this->db->query("SELECT tb_alumni.id_alumni,
		tb_alumni.nis,tb_alumni.nama,tb_alumni.jk,
		tb_alumni.tempat_lhr,
		tb_alumni.tgl_lhr,tb_alumni.angkatan,tb_alumni.no,
		tb_alumni.email,tb_alumni.poto,tb_alumni.pekerjaan,
		tb_alumni.alamat,tb_kecamatan.kecamatan,
		tb_kabupaten.kabupaten,tb_provinsi.provinsi,tb_alumni.lattitude,tb_alumni.longitude,
		tb_alumni.password from tb_alumni LEFT JOIN tb_kecamatan ON 
		tb_alumni.id_kec = tb_kecamatan.id_kec 
		LEFT JOIN tb_kabupaten ON tb_alumni.id_kab =tb_kabupaten.id_kab
		LEFT JOIN tb_provinsi ON tb_alumni.id_prov = tb_provinsi.id_prov
		where tb_alumni.id_alumni='$where' ")->result();
		$data['wali'] = $this->db->query("SELECT * from tb_wali where id_alumni='$where'")->result();
		$this->load->view('web/index',$data);
        }	
	}
    public function lengkapi()
    {
        $id_alumni 		= $this->input->post('id_alumni');
      	$jk 			= $this->input->post('jk');
		$angkatan 		= $this->input->post('angkatan');
		$id_jur 		= $this->input->post('id_jur');
		$tempat_lhr 	= $this->input->post('tempat_lhr');
		$tgl_lhr 		= $this->input->post('tgl_lhr');
		$no 			= $this->input->post('no');
		$email 			= $this->input->post('email');
		$poto  			= $_FILES['poto']; 
		$pekerjaan 		= $this->input->post('pekerjaan');
		$alamat 		= $this->input->post('alamat');
		$id_kec 		= $this->input->post('id_kec');
		$id_kab  		= $this->input->post('id_kab'); 
		$id_prov  		= $this->input->post('id_prov'); 
		$lattitude 		= $this->input->post('lattitude');
		$longitude  	= $this->input->post('longitude'); 	
		if ($poto =''){}else{
			$config['upload_path']		='./upload/alumni';
			$config['allowed_types']		='jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('poto')){
				echo "Gagal"; die();
			}else{
				$poto=$this->upload->data('file_name');
			}
		}
		$data = array(
            'id_alumni'     => $id_alumni,
			'jk' 			=> $jk,
			'angkatan'		=> $angkatan,
			'id_jur' 		=> $id_jur,
			'tempat_lhr' 	=> $tempat_lhr,
			'tgl_lhr' 		=> $tgl_lhr,
			'no' 			=> $no,
			'email' 		=> $email,
			'poto'  		=> $poto,
			'pekerjaan' 	=> $pekerjaan,
			'alamat' 		=> $alamat,
			'id_kec' 		=> $id_kec,
			'id_kab' 		=> $id_kab,
			'id_prov' 		=> $id_prov,
			'lattitude'  	=> $lattitude,
			'longitude' 	=> $longitude,
			
		   );
        $where = array(
            'id_alumni' =>$id_alumni
        );
		$this->M_lengkapi->update_data($where,$data, 'tb_alumni');
		redirect('User/detail');
		$this->load->view('admin/alumni/tambah');
    }
    public function lengkapi_ayah()
    {
        $id_alumni 			= $this->input->post('id_alumni');
		$nama_ayah 			= $this->input->post('nama_ayah');
		$nama_ibuk 			= $this->input->post('nama_ibuk');
		$pekerjaan_ayah 	= $this->input->post('pekerjaan_ayah');
		$pekerjaan_ibuk 	= $this->input->post('pekerjaan_ibuk');
		$no_wali 			= $this->input->post('no_wali');
		$data = array(
			'id_alumni' 		=> $id_alumni,
			'nama_ayah' 		=> $nama_ayah,
			'nama_ibuk' 		=> $nama_ibuk,
			'pekerjaan_ayah' 	=> $pekerjaan_ayah,
			'pekerjaan_ibuk' 	=> $pekerjaan_ibuk,
			'no_wali' 			=> $no_wali,	
		);
		$this->M_lengkapi->input_data($data, 'tb_wali');
		redirect('User/detail');
    }
}