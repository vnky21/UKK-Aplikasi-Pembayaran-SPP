<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Kelas_Model extends CI_Model {

 	public function getID(){
 		$this->db->select_max('id_kelas');
        $data=$this->db->get('tb_kelas')->row_array();
        $kode=$data['id_kelas'];
        $noUrut= (int) substr($kode,-4,4);
        $noUrut++;
        $char= "KLS";
        return $char.sprintf("%05s",$noUrut);

 	} 
 	
 
 }
 
