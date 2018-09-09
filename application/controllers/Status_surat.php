<?php

Class Status_surat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_ajukan');
    }

    function index() {
        $this->db->select('*');
        $this->db->from('tbl_surat');
        $this->db->join('prihal', 'prihal.id_prihal=tbl_surat.id_prihal');
        $data['surat'] = $this->db->get()->result();
        $this->template->load('template', 'status', $data);
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_ajukan->update();
            redirect('Status_surat');
        } else {
            $id = $this->uri->segment(3);
            $data['surat'] = $this->db->get_where('tbl_surat', array('id_surat' => $id))->row_array();
            $this->template->load('template', 'status/edit', $data);
        }
    }

    function cetak() {
        //$this->load->library('fpdf');
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, 'NIM', 1, 0);
        $pdf->Cell(85, 6, 'NAMA MAHASISWA', 1, 0);
        $pdf->Cell(27, 6, 'NO HP', 1, 0);
        $pdf->Cell(30, 6, 'TANGGAL LHR', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Output();
    }

}

?>