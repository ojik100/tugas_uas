<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
	
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
		
		$this->load->view('admin/laporan/index',$data);
	}

	function cetakalumni(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SMK NW PANCOR',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR ALUMNI SMK NW PANCOR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIS',1,0);
        $pdf->Cell(85,6,'NAMA SISWA',1,0);
        $pdf->Cell(27,6,'ALAMAT',1,0);
        $pdf->Cell(25,6,'JK',1,1);
		$pdf->SetFont('Arial','',10);
        $alumni = $this->db->get('tb_alumni')->result();
        foreach ($alumni as $row){
            $pdf->Cell(20,6,$row->nis,1,0);
            $pdf->Cell(85,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->alamat,1,0);
			$pdf->Cell(25,6,$row->jk,1,1); 
			  }
        $pdf->Output();
	}

	function cetakwali(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SMK NW PANCOR',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR WALI ALUMNI SMK NW PANCOR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(25,6,'NAMA AYAH',1,0);
        $pdf->Cell(85,6,'NAMA IBUK',1,0);
        $pdf->Cell(27,6,'NO Telpon',1,0);
		$pdf->Cell(25,6,'PEKERJAAN',1,1);
		$pdf->SetFont('Arial','',10);
        $alumni = $this->db->get('tb_wali')->result();
        foreach ($alumni as $row){
            $pdf->Cell(25,6,$row->nama_ayah,1,0);
            $pdf->Cell(85,6,$row->nama_ibuk,1,0);
			$pdf->Cell(27,6,$row->no_wali,1,0);
			$pdf->Cell(25,6,$row->pekerjaan_ayah,1,1); 
			
			  }
        $pdf->Output();
    }
	
}
