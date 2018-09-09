<?php

Class Nota extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_nota');
    }

    function index() {
        $this->db->select('*');
        $this->db->from('tbl_nota');
        $this->db->join('tbl_seksi', 'tbl_seksi.id_seksi=tbl_nota.id_seksi');
        $data['nota'] = $this->db->get()->result();
        $this->template->load('template', 'nota_new', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_nota->add();
            redirect('Nota');
        } else {
            $this->template->load('template', 'nota_new/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_nota->edit();
            redirect('Nota');
        } else {
            $id = $this->uri->segment(3);
            $this->db->select('*');
            $this->db->from('tbl_nota');
            $this->db->where('id_nota', $id);
            $this->db->join('tbl_seksi', 'tbl_seksi.id_seksi=tbl_nota.id_seksi');
            $data['nota'] = $this->db->get()->row_array();
            $this->template->load('template', 'nota_new/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_nota', $id);
        $this->db->delete('tbl_nota');
        redirect('Nota');
    }

    function donwload() {
        $this->load->helper('download');
        $id = $this->uri->segment(3);
        $data = $this->db->get_where('tbl_nota', array('id_nota' => $id))->result();
        foreach ($data as $row) {
            $nama = $row->nomor;
            $nama_file = $row->file;
        }
        if (!empty($nama_file)) {
            force_download('upload/nota_new/' . $nama_file, NULL);
        } else {
            $this->session->set_flashdata('file','file kosong....');
            redirect('Nota');
        }
    }

    function upload_surat() {
        $config['upload_path'] = './upload/nota_new';
        $config['allowed_types'] = 'pdf|docx|jpg|png';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>