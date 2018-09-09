<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http:         //example.com/index.php/welcome
     * 	- or -
     * 		http:         //example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https:     //codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
         $username = $this->input->post('username');
        $passwod = md5($this->input->post('password'));
        $data = $this->db->get_where('tbl_login', array('username' => $username, 'password' => $passwod))->row_array();
        if ($data > 0) {
            $this->session->set_userdata($data);
            redirect('Dashboard');
        } else {
            $this->load->view('login');
        }
    }

   // function login() {
       
    //}

}
