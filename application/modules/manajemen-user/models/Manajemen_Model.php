<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_Model extends CI_Model {
	
 	public function getSiswa(){
 		$query=$this->db->query("SELECT `nisn`,`nis`,`nama`,`tb_kelas`.`nama_kelas`,`tb_spp`.`tahun` FROM `tb_siswa` 
 								 JOIN `tb_kelas` ON `tb_siswa`.`id_kelas` = `tb_kelas`.`id_kelas`
 								 JOIN `tb_spp` ON `tb_siswa`.`id_spp` = `tb_spp`.`id_spp` 
 								 ORDER BY `nis` ASC");
 		return $query->result_array();
 	}
 	
 	public function getCariSiswa($id_kelas = null){
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
        $this->db->join('tb_spp', 'tb_siswa.id_spp = tb_spp.id_spp');
 		$this->db->where('tb_siswa.id_kelas', $id_kelas);
 		$this->db->order_by('nis', 'asc');
 		return $this->db->get()->result_array();
 	}

	

}

/* End of file Manajemen_Model.php */
/* Location: ./application/modules/manajemen-user/models/Manajemen_Model.php */
 ?>