<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_alumni');
	
	 if($this->session->userdata('status') != "login"){
			redirect(base_url("Auth"));
		 }
		
	}
	public function index()
	{
		$data['alumni'] = $this->db->query("select * from tb_alumni order by creat_at")->result();
		$this->load->view('admin/alumni/index',$data);
	}
	public function cetak(){
		ob_start();
		$data['alumni'] = $this->db->query("select * from tb_alumni order by creat_at")->result();
		$this->load->view('admin/alumni/index', $data);
		$html = ob_get_contents();
			ob_end_clean();
			
		require './asset/html2pdf/autoload.php';
		
		$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Siswa.pdf', 'D');
	  }
	public function tambah()
	{
		$data['jurusan'] = $this->db->query("select * from tb_jurusan")->result();
		$data['kecamatan'] = $this->db->query("select * from tb_kecamatan")->result();
		$data['kabupaten'] = $this->db->query("select * from tb_kabupaten")->result();
		$data['provinsi']  = $this->db->query("select * from tb_provinsi")->result();	
		$this->load->view('admin/alumni/tambah',$data);
	}
	public function detail($id)
	{
		$data['alumni'] = $this->db->query("SELECT tb_alumni.nis,tb_alumni.nama,tb_alumni.jk,
		tb_alumni.tempat_lhr,
		tb_alumni.tgl_lhr,tb_alumni.angkatan,tb_alumni.no,
		tb_alumni.email,tb_alumni.poto,tb_alumni.pekerjaan,tb_alumni.alamat,tb_kecamatan.kecamatan,
		tb_kabupaten.kabupaten,tb_provinsi.provinsi,tb_alumni.lattitude,tb_alumni.longitude,
		tb_alumni.password,tb_jurusan.jurusan from tb_alumni LEFT JOIN tb_kecamatan ON tb_alumni.id_kec = tb_kecamatan.id_kec 
		LEFT JOIN tb_kabupaten ON tb_alumni.id_kab =tb_kabupaten.id_kab
		LEFT JOIN tb_provinsi ON tb_alumni.id_prov = tb_provinsi.id_prov
		LEFT JOIN tb_jurusan ON tb_alumni.id_jur = tb_jurusan.id_jur
		where tb_alumni.id_alumni='$id'")->result();
		
		$data['wali'] = $this->db->query("SELECT * from tb_wali where id_alumni='$id'")->result();
		
		$this->load->view('admin/alumni/detail',$data);
	}
	public function edit($id)
	{
		
	
		$data['kecamatan'] = $this->db->query("select * from tb_kecamatan")->result();
		$data['kabupaten'] = $this->db->query("select * from tb_kabupaten")->result();
		$data['provinsi']  = $this->db->query("select * from tb_provinsi")->result();
		$data['jurusan']   = $this->db->query("select * from tb_jurusan")->result();
		$data['alumni']    = $this->db->query("SELECT tb_alumni.id_alumni	,tb_alumni.nis,tb_alumni.nama,tb_alumni.jk,
		tb_alumni.tempat_lhr,
		tb_alumni.tgl_lhr,tb_alumni.angkatan,tb_alumni.no,
		tb_alumni.email,tb_alumni.poto,tb_alumni.pekerjaan,tb_alumni.alamat,tb_kecamatan.kecamatan,
		tb_kabupaten.kabupaten,tb_provinsi.provinsi,tb_alumni.lattitude,tb_alumni.longitude,
		tb_alumni.password from tb_alumni LEFT JOIN tb_kecamatan ON tb_alumni.id_kec = tb_kecamatan.id_kec 
		LEFT JOIN tb_kabupaten ON tb_alumni.id_kab =tb_kabupaten.id_kab
		LEFT JOIN tb_provinsi ON tb_alumni.id_prov = tb_provinsi.id_prov
		where tb_alumni.id_alumni='$id'")->result();
		$this->load->view('admin/alumni/edit',$data);
	}

	public function aksi_tambah()
	{
		$nis      	= $this->input->post('nis');
		$nama    	= $this->input->post('nama');
		$jk 	    = $this->input->post('jk');
		$angkatan 	= $this->input->post('angkatan');
		$id_jur 	= $this->input->post('id_jur');
		$tempat_lhr = $this->input->post('tempat_lhr');
		$tgl_lhr 	= $this->input->post('tgl_lhr');
		$no 	    = $this->input->post('no');
		$email 	    = $this->input->post('email');
		$poto       = $_FILES['poto'];
		$pekerjaan 	= $this->input->post('pekerjaan');
		$alamat 	= $this->input->post('alamat');
		$id_kec 	= $this->input->post('id_kec');
		$id_kab     = $this->input->post('id_kab'); 
		$id_prov    = $this->input->post('id_prov'); 
		$lattitude 	= $this->input->post('lattitude');
		$longitude  = $this->input->post('longitude'); 
		
		$password   = $this->input->post('password');
		if ($poto   =''){}else{
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
			'nis'  => $nis,
			'nama' =>$nama,
			'jk' => $jk,
			'angkatan' => $angkatan,
			'id_jur' => $id_jur,
			'tempat_lhr' => $tempat_lhr,
			'tgl_lhr' => $tgl_lhr,
			'no' => $no,
			'email' => $email,
			'poto'  => $poto,
			'pekerjaan' =>$pekerjaan,
			'alamat' => $alamat,
			'id_kec' => $id_kec,
			'id_kab' => $id_kab,
			'id_prov' => $id_prov,
			'lattitude'  => $lattitude,
			'longitude' =>$longitude,
			
			'password' => $password,
			
		);
		
		$this->M_alumni->input_data($data, 'tb_alumni');
		redirect('Alumni');
		
		$this->load->view('admin/alumni/tambah');
	}
	function hapus($id)
	{
	$where = array('id_alumni' => $id);
	$this->M_alumni->hapus_data($where,'tb_alumni');
	redirect('Alumni');
}
public function aksi_edit()
{
		$id_alumni = $this->input->post('id_alumni');
		$nis= $this->input->post('nis');
		$nama 	= $this->input->post('nama');
		$jk 	= $this->input->post('jk');
		$angkatan 	= $this->input->post('angkatan');
		$id_jur 	= $this->input->post('id_jur');
		$tempat_lhr 	= $this->input->post('tempat_lhr');
		$tgl_lhr 	= $this->input->post('tgl_lhr');
		$no 	= $this->input->post('no');
		$email 	= $this->input->post('email');
		$poto  = $_FILES['poto'];
		$pekerjaan 	= $this->input->post('pekerjaan');	
		$alamat 	= $this->input->post('alamat');
		$id_kec 	= $this->input->post('id_kec');
		$id_kab  =$this->input->post('id_kab'); 
		$id_prov  = $this->input->post('id_prov'); 
		$lattitude 	= $this->input->post('lattitude');
		$longitude  = $this->input->post('longitude'); 	
		$password  = $this->input->post('password');	
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
		'id_alumni' =>$id_alumni,
		'nis'  => $nis,
		'nama' =>$nama,
		'jk' => $jk,
		'angkatan' => $angkatan,
		'id_jur' => $id_jur,
		'tempat_lhr' => $tempat_lhr,
		'tgl_lhr' => $tgl_lhr,
		'no' => $no,
		'email' => $email,
		'poto'  => $poto,
		'pekerjaan' =>$pekerjaan,
		'alamat' => $alamat,
		'id_kec' => $id_kec,
		'id_kab' => $id_kab,
		'id_prov' => $id_prov,
		'lattitude'  => $lattitude,
		'longitude' =>$longitude,
		'password' => $password,
		
	);
	$where = array(
		'id_alumni' =>$id_alumni
	);
	
	$this->M_alumni->update_data($where,$data, 'tb_alumni');
	redirect('Alumni');
	
	

}
}