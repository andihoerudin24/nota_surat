<?php

Class Nota_dinnas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_ajukan');
    }

    function index() {

        $this->db->select('*');
        $this->db->from('tbl_surat');
        $this->db->join('prihal', 'prihal.id_prihal=tbl_surat.id_prihal');
        $data['surat'] = $this->db->get()->result();
        $this->template->load('template', 'nota', $data);
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $uploads = $this->upload_surat();
            $this->Model_ajukan->edit($uploads);
            redirect('Nota_dinnas');
        } else {
            $id = $this->uri->segment(3);
            $data['surat'] = $this->db->get_where('tbl_surat', array('id_surat' => $id))->row_array();
            $this->template->load('template', 'nota/edit', $data);
        }
    }

    function update() {
        if (isset($_POST['submit'])) {
            $this->Model_ajukan->edit();
            redirect('Status_surat');
        } else {
            $id = $this->uri->segment(3);
            $data['surat'] = $this->db->get_where('tbl_surat', array('id_surat' => $id))->row_array();
            $this->template->load('template', 'nota/edit', $data);
        }
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

    function Hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_surat', $id);
        $this->db->delete('tbl_surat');
        redirect('Nota_dinnas');
    }

}

?>