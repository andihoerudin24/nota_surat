<?php

Class Model_nota extends Ci_Model {

    function add() {
        $data = array(
            'nomor' => $this->input->post('nomor'),
            'disposisi' => $this->input->post('disposisi'),
            'id_seksi' => $this->input->post('id_seksi'),
            'isi_nota' => $this->input->post('isi_nota'),
                //     'file' => $uploads
        );
        $this->db->insert('tbl_nota', $data);
    }

    function edit() {
        $data = array(
            'nomor' => $this->input->post('nomor'),
            'disposisi' => $this->input->post('disposisi'),
            'id_seksi' => $this->input->post('id_seksi'),
            'isi_nota' => $this->input->post('isi_nota'),
            'status'=>1
                //       'file' => $uploads
        );
        $id_nota = $this->input->post('id_nota');
        $this->db->where('id_nota', $id_nota);
        $this->db->update('tbl_nota', $data);
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