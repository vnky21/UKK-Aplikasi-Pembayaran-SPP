<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_Model extends CI_Model {
   public function get($tb){
   return $this->db->get($tb)->result_array();
   }

   public function getWhere($tb,$data,$value){
   	  return $this->db->get_where($tb, [$data => $value])->row_array();
   }

   public function getWhereTable($tb,$data,$value){
        return $this->db->get_where($tb, [$data => $value])->result_array();
   }

	public function insert($tb,$data){
		$this->db->insert($tb,$data);
	}

   public function update($tb,$data,$id,$value){
      $this->db->where($id,$value);
      $this->db->update($tb,$data);
   }

   public function delete($tb,$id,$value){
      $this->db->where($id, $value);
      $this->db->delete($tb);
   }

   public function getDetailSiswa($nisn){
      $query=$this->db->query("SELECT * FROM `tb_siswa` 
                              JOIN `tb_kelas` ON `tb_siswa`.`id_kelas` = `tb_kelas`.`id_kelas` 
                              JOIN `tb_jurusan` ON `tb_kelas`.`id_jurusan` = `tb_jurusan`.`id_jurusan`
                              JOIN `tb_spp` ON `tb_siswa`.`id_spp` = `tb_spp`.`id_spp`
                              WHERE `nisn` = $nisn");

      return $query->row_array();

   }


}
