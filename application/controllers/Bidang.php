<?php

Class Bidang extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_bidang');
    }

    function index() {
        $data['bidang'] = $this->db->get('tbl_bidang')->result();
        $this->template->load('template', 'bidang', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_bidang->add();
             redirect('Bidang');
        } else {
          $this->template->load('template', 'bidang');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_bidang->edit();
             redirect('Bidang');
        } else {

            $id = $this->uri->segment(3);
            $data['bidang'] = $this->db->get_where('tbl_bidang', array('id_bidang' => $id))->row_Array();
            $this->template->load('template', 'bidang/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_bidang', $id);
        $this->db->delete('tbl_bidang');
        redirect('Bidang');
    }

}

?>