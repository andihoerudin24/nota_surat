<?php

Class Model_seksi extends CI_Model {

    function add() {
        $data = array(
            'nama_seksi' => $this->input->post('nama_seksi'),
            'id_bidang' => $this->input->post('id_bidang'),
        );
        $this->db->insert('tbl_seksi', $data);
    }

    function edit() {
        $data = array(
            'nama_seksi' => $this->input->post('nama_seksi'),
            'id_bidang' => $this->input->post('id_bidang'),
        );
        $id = $this->input->post('id_seksi');
        $this->db->where('id_seksi', $id);
        $this->db->update('tbl_seksi', $data);
    }

}

?>