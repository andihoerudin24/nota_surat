<?php

Class Tembusan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_tembusan');
    }

    function index() {
        $this->db->select('*');
        $this->db->from('tbl_nota');
        $this->db->from('tbl_bidang');
        $this->db->join('tbl_tembusan', 'tbl_tembusan.id_nota=tbl_nota.id_nota and tbl_tembusan.id_bidang=tbl_bidang.id_bidang');
        $data['tembusan'] = $this->db->get()->result();
        $this->template->load('template', 'tembusan', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_tembusan->add();
            $this->session->set_flashdata('Berhasil', 'berhasil menambahkan data');
            redirect('Tembusan');
        } else {
            $this->template->load('template', 'tembusan/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_tembusan->edit();
            $this->session->set_flashdata('edit', 'berhasil edit data');

            redirect('Tembusan');
        } else {
            $id = $this->uri->segment(3);
            $this->db->select('*');
            $this->db->from('tbl_nota');
            $this->db->from('tbl_bidang');
            $this->db->join('tbl_tembusan', 'tbl_tembusan.id_nota=tbl_nota.id_nota and tbl_tembusan.id_bidang=tbl_bidang.id_bidang');
            $this->db->where('id_tembusan', $id);
            $data['tembusan'] = $this->db->get()->row_array();
            $this->template->load('template', 'tembusan/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_tembusan', $id);
        $this->db->delete('tbl_tembusan');
        $this->session->set_flashdata('hapus', 'berhasil menambahkan data');
        redirect('Tembusan');
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
            $this->session->set_flashdata('file', 'file kosong....');
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