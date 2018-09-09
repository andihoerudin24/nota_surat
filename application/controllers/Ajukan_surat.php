<?php

Class Ajukan_surat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_ajukan');
    }

    function index() {
        $this->template->load('template', 'ajukan');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $uploads = $this->upload_surat();
            $this->Model_ajukan->add($uploads);
            redirect('Nota_dinnas');
            //echo $this->session->set_flashdata('Berhasil','Surat Berhasil Direkap....');
        } else {
            $this->template->load('template', 'ajukan');
        }
    }

    function update() {
        $data = [
            'status' => 1
        ];
        $id_surat = $this->uri->segment(3);
        $this->db->where('id_surat', $id_surat);
        $this->db->update('tbl_surat', $data);
        $this->session->set_flashdata('Berhasil', 'Sukses surat telah di disposisi silahkan menuju menu status surat sudah di disposisi');
        redirect('Nota_dinnas');
    }

    function edit() {
        $data = [
            'status' => 0
        ];
        $id_surat = $this->uri->segment(3);
        $this->db->where('id_surat', $id_surat);
        $this->db->update('tbl_surat', $data);
        $this->session->set_flashdata('hapus', 'SUKSES status berubah menjadi belum di disposisi silahkan menuju menu status untuk melihat status surat');
        redirect('Nota_dinnas');
    }

    function upload_surat() {
        $config['upload_path'] = './upload';
        $config['allowed_types'] = 'pdf|docx|jpg|png';
        $config['max_size'] = 8000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>