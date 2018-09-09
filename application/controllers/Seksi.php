<?php

Class Seksi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_seksi');
    }

    function index() {
        $this->db->select('*');
        $this->db->from('tbl_seksi');
        $this->db->join('tbl_bidang', 'tbl_bidang.id_bidang=tbl_seksi.id_bidang');
        $data['seksi']=$this->db->get()->result();
        $this->template->load('template', 'seksi', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_seksi->add();
            redirect('Seksi');
        } else {
            $this->template->load('template', 'seksi');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_seksi->edit();
            redirect('Seksi');
        } else {
            $id = $this->uri->segment(3);
            $data['seksi'] = $this->db->get_where('tbl_seksi', array('id_seksi' => $id))->row_Array();
            $this->template->load('template', 'seksi/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_seksi', $id);
        $this->db->delete('tbl_seksi');
        redirect('Seksi');
    }

}

?>