<?php
class Dashboard extends CI_Controller{
    
    function index(){
        $this->template->load('template','dashboard');
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('Auth');
    }
}


?>