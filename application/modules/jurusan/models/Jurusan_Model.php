<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Jurusan_Model extends CI_Model {

 	public function getID(){
 		$this->db->select_max('id_jurusan');
        $data=$this->db->get('tb_jurusan')->row_array();
        $kode=$data['id_jurusan'];
        $noUrut= (int) substr($kode,-4,4);
        $noUrut++;
        $char= "JRSN";
        return $char.sprintf("%05s",$noUrut);

 	} 
 	
 
 }
 
