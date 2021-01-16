<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
	 	$this->load->model('M_user');
	}
	public function index()
	{
		$data['jumlah_info'] = $this->db->query("select * from tb_info")->num_rows();
		$data['info'] = $this->db->query("select * from tb_info order by id_info")->result();
		$this->load->view('web/login',$data);
	}
	public function info()
	{
		$data['jumlah_info'] = $this->db->query("select * from tb_info")->num_rows();
		$data['info'] = $this->db->query("select * from tb_info order by id_info")->result();
		$this->load->view('web/aksi/info',$data);
	}
	public function detail_info($id)
	{
		$data['jumlah_info'] = $this->db->query("select * from tb_info")->num_rows();
		$data['info_list'] = $this->db->query("select * from tb_info  ")->result();
		$data['info'] = $this->db->query("select * from tb_info  where id_info='$id' ")->result();
		$this->load->view('web/aksi/detail_info',$data);
	}
	public function register()
	{
		$data['jurusan'] = $this->db->query("select * from tb_jurusan")->result();
		$this->load->view('web/register',$data);
	}
	public function detail()
	{ 
		$data['jumlah_info'] = $this->db->query("select * from tb_info")->num_rows();
		$data['info'] = $this->db->query("select * from tb_info order by id_info")->result();
		if($this->session->userdata('id_alumni')){
        $where= $this->session->userdata('id_alumni');
         $data['alumni'] = $this->db->query("SELECT tb_alumni.nis,tb_alumni.nama,tb_alumni.jk,
		tb_alumni.tempat_lhr,
		tb_alumni.tgl_lhr,tb_alumni.angkatan,tb_alumni.no,
		tb_alumni.email,tb_alumni.poto,tb_alumni.pekerjaan,tb_alumni.alamat,tb_kecamatan.kecamatan,
		tb_kabupaten.kabupaten,tb_provinsi.provinsi,tb_alumni.lattitude,tb_alumni.longitude,
		tb_alumni.password from tb_alumni LEFT JOIN tb_kecamatan ON tb_alumni.id_kec = tb_kecamatan.id_kec 
		LEFT JOIN tb_kabupaten ON tb_alumni.id_kab =tb_kabupaten.id_kab
		LEFT JOIN tb_provinsi ON tb_alumni.id_prov = tb_provinsi.id_prov
		where tb_alumni.id_alumni='$where' ")->result();
		$data['wali'] = $this->db->query("SELECT * from tb_wali where id_alumni='$where'")->result();
		$this->load->view('web/aksi/detail',$data);
        }
    }
    public function aksi_login()
	{
		$nis = $this->input->post('nis');
		$password = $this->input->post('password');
		$where = array(
			'nis' => $nis,
			'password' => $password,
);
		$cek = $this->M_user->cek_login("tb_alumni",$where)->row_array();
		if($cek > 0){
			$data_session = array(
				'nama' =>$cek['nama'],
				'status' => "login",
				'level' => "1",
				'id_alumni'=>$cek['id_alumni'],
				);
			$this->session->set_userdata($data_session);
			echo "<script>
			window.location.href='" . base_url() . "Home';
			</script>";
		}else{
			echo "<script>
			window.location.href='" . base_url() . "User';
			</script>";
		}
	}
	public function Logout()
	{
		{
			$this->session->sess_destroy();	
			redirect(base_url('User'));
		}
	}
}