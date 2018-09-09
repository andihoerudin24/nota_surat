<?php
Class Model_ajukan extends Ci_Model{

	function add($uploads){
	   $data=array(
          'kepada'=>$this->input->post('kepada'),
          'tembusan'=>$this->input->post('tembusan'),
          'dari'=>$this->input->post('dari'),
          'tanggal'=>$this->input->post('tanggal'),
          'no_surat'=>$this->input->post('no_surat'),
          'id_prihal'=>$this->input->post('id_prihal'),
          'isi_nota'=>$this->input->post('isi_nota'),
          'file'=>$uploads
	   );
	   $this->db->insert('tbl_surat',$data);
	   echo "sukses";
	}

	function edit($uploads){
		if (!empty($uploads)) {
	       $data=array(
          'kepada'=>$this->input->post('kepada'),
          'tembusan'=>$this->input->post('tembusan'),
          'dari'=>$this->input->post('dari'),
          'tanggal'=>$this->input->post('tanggal'),
          'no_surat'=>$this->input->post('no_surat'),
          'id_prihal'=>$this->input->post('id_prihal'),
          'isi_nota'=>$this->input->post('isi_nota'),
          'file'=>$uploads
	   );
				$id_surat=$this->input->post('id_surat');
				$this->db->where('id_surat',$id_surat);
				$this->db->update('tbl_surat',$data);
}else{

	   $data=array(
          'kepada'=>$this->input->post('kepada'),
          'tembusan'=>$this->input->post('tembusan'),
          'dari'=>$this->input->post('dari'),
          'tanggal'=>$this->input->post('tanggal'),
          'no_surat'=>$this->input->post('no_surat'),
          'id_prihal'=>$this->input->post('id_prihal'),
          'isi_nota'=>$this->input->post('isi_nota'),
        //  'file'=>$uploads
	   );
}
				$id_surat=$this->input->post('id_surat');
				$this->db->where('id_surat',$id_surat);
				$this->db->update('tbl_surat',$data);
	}


	function update(){
	
	       $data=array(
          'kepada'=>$this->input->post('kepada'),
          'tembusan'=>$this->input->post('tembusan'),
          'dari'=>$this->input->post('dari'),
          'tanggal'=>$this->input->post('tanggal'),
          'no_surat'=>$this->input->post('no_surat'),
          'id_prihal'=>$this->input->post('id_prihal'),
          'isi_nota'=>$this->input->post('isi_nota'),
          'status'=>1,
          'id_login'=>$this->input->post('id_login')
	   );
				$id_surat=$this->input->post('id_surat');
				$this->db->where('id_surat',$id_surat);
				$this->db->update('tbl_surat',$data);
	}




}


?>