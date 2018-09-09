<?php

Class Model_tembusan extends Ci_Model {

    function add() {
        $data = array(
            'id_nota' => $this->input->post('id_nota'),
            'id_bidang' => $this->input->post('id_bidang')
        );
        $this->db->insert('tbl_tembusan', $data);
    }

    function edit() {
        $data = array(
            'id_nota' => $this->input->post('id_nota'),
            'id_bidang' => $this->input->post('id_bidang')
        );
        $id=$this->input->post('id_tembusan');
        $this->db->where('id_tembusan',$id);
        $this->db->update('tbl_tembusan', $data);
    }

    function update() {

        $data = array(
            'kepada' => $this->input->post('kepada'),
            'tembusan' => $this->input->post('tembusan'),
            'dari' => $this->input->post('dari'),
            'tanggal' => $this->input->post('tanggal'),
            'no_surat' => $this->input->post('no_surat'),
            'id_prihal' => $this->input->post('id_prihal'),
            'isi_nota' => $this->input->post('isi_nota'),
            'status' => 1,
            'id_login' => $this->input->post('id_login')
        );
        $id_surat = $this->input->post('id_surat');
        $this->db->where('id_surat', $id_surat);
        $this->db->update('tbl_surat', $data);
    }

}

?>