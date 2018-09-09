<?php

Class Model_bidang extends CI_Model {

    function add() {
        $data = array(
            'nama_bidang' => $this->input->post('nama_bidang'),
        );
        $this->db->insert('tbl_bidang', $data);
    }
    
    function edit() {
        $data = array(
            'nama_bidang' => $this->input->post('nama_bidang'),
        );
        $id= $this->input->post('id_bidang');
        $this->db->where('id_bidang',$id);
        $this->db->update('tbl_bidang',$data);
    }

}
?>