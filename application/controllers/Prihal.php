<?php

Class Prihal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_prihal');
    }

    function index() {
        $data['prihal'] = $this->db->get('prihal')->result();
        $this->template->load('template', 'kategori', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_prihal->add();
            redirect('Prihal');
        } else {
            
        $this->template->load('template', 'kategori');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_prihal->edit();
             redirect('Prihal');
        } else {

            $id = $this->uri->segment(3);
            $data['prihal'] = $this->db->get_where('prihal', array('id_prihal' => $id))->row_Array();
            $this->template->load('template', 'kategori/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(3);
        $this->db->where('id_prihal', $id);
        $this->db->delete('prihal');
        redirect('Prihal');
    }

}

?>