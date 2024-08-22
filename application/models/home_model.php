<?php
class home_model extends CI_Model{

	function getpegawai(){
	    $data=null;
	    $dbb = $this->load->database('fb1',true);
	    $query = $dbb->query("select * from pegawai");
		foreach ($query->result() as $row)
	    { $data[] = $row;}
		return $data;
	}

	function inputpegawai($pegawai, $namapeg, $dept){
		// echo $pegawai.$namapeg.$dept; exit();
	    $data1=null;
	    $dbb = $this->load->database('fb1',true);
	    $data = array('pegawai' => $pegawai, 'namapeg' => $namapeg, 'dept' => $dept);
	    $dbb->insert('pegawai',$data);
	    $query = $dbb->query("select * from pegawai");
		foreach ($query->result() as $row)
	    { $data1[] = $row;}
		return $data1;
	}

	function updatepegawai(){
		// echo $pegawai.$namapeg.$dept; exit();
	    $data1=null;
	    $dbb = $this->load->database('fb1',true);
	    $data = array('namapeg' => 'Galih Julianto Purnomo');
	    $dbb->update('pegawai',$data,array('pegawai'=>'1113853'));
	    $query = $dbb->query("select * from pegawai");
		foreach ($query->result() as $row)
	    { $data1[] = $row;}
		return $data1;
	}

}
?>