<?php

Class Model_prihal extends CI_Model {

    function add() {
        $data = array(
            'nama_prihal' => $this->input->post('nama_kategori'),
        );
        $this->db->insert('prihal', $data);
    }
    
    function edit() {
        $data = array(
            'nama_prihal' => $this->input->post('nama_kategori'),
        );
        $id= $this->input->post('id_prihal');
        $this->db->where('id_prihal',$id);
        $this->db->update('prihal',$data);
    }

}
?>