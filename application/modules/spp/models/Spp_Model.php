<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class SPP_Model extends CI_Model {

 	public function getID(){
 		$this->db->select_max('id_spp');
        $data=$this->db->get('tb_spp')->row_array();
        $kode=$data['id_spp'];
        $noUrut= (int) substr($kode,-4,4);
        $noUrut++;
        $char= "SPP";
        return $char.sprintf("%05s",$noUrut);

 	} 
 	
 
 }
 
