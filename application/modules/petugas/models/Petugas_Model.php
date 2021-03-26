<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Petugas_Model extends CI_Model {

 	public function getID(){
 		$this->db->select_max('id_petugas');
        $data=$this->db->get('tb_petugas')->row_array();
        $kode=$data['id_petugas'];
        $noUrut= (int) substr($kode,-4,4);
        $noUrut++;
        $char= "PTG";
        return $char.sprintf("%05s",$noUrut);

 	} 
 	
 
 }
 
