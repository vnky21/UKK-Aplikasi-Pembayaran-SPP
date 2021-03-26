<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Pembayaran_Model extends CI_Model {

 	public function getID(){
 		$this->db->select_max('id_pembayaran');
        $data=$this->db->get('tb_pembayaran')->row_array();
        $kode=$data['id_pembayaran'];
        $noUrut= (int) substr($kode,-3,3);
        $noUrut++;
        $char= "PMBYRN";
        return $char.sprintf("%05s",$noUrut);

 	} 

 	public function getDataPembayaran($nisn,$id_spp){
 		$this->db->where('nisn',$nisn);
 		$this->db->where('id_spp', $id_spp);
 		$this->db->select('bulan_dibayar');
 		$query = $this->db->get('tb_pembayaran')->result_array();


 		if (!empty($query)) {
                foreach ($query as $row) {
                $bulan_dibayar [] = $row['bulan_dibayar'];         			
 	            }
 	            return $bulan_dibayar;  
        }              
        
    }


    public function getPembayaranByNisn($nisn){
        $query=$this->db->query("SELECT * FROM `tb_pembayaran` 
                                 JOIN `tb_siswa` ON `tb_pembayaran`.`nisn` = `tb_siswa`.`nisn`
                                 JOIN `tb_petugas` ON `tb_pembayaran`.`id_petugas` = `tb_petugas`.`id_petugas`
                                 WHERE `tb_pembayaran`.`nisn` = $nisn 
                                 ORDER BY `id_pembayaran` DESC");
        return $query->result_array();
    }

    public function getTotalPembayaranByNisn($nisn){
        $siswa = $this->db->get_where('tb_siswa',['nisn' => $nisn])->row_array();
        $spp = $this->db->get_where('tb_spp', ['id_spp' => $siswa['id_spp']])->row_array();  
        $array = array('nisn' => $nisn,'id_spp' => $siswa['id_spp'] );
        $this->db->where($array);
        $this->db->select_sum('jumlah_bayar');
        $data = $this->db->get('tb_pembayaran')->row_array();
        
        if ($data['jumlah_bayar'] == $spp['nominal_tahun']) {
            return TRUE;
        }else{
            return FALSE;
        }

    }
    

    public function entri($nisn,$id_spp,$bulan){
        $id=$this->Pembayaran_Model->getID();
        $siswa = $this->Crud_Model->getDetailSiswa($nisn);

        $spp= $this->Crud_Model->getWhere('tb_spp','id_spp',$siswa['id_spp']);
        $tahun= explode("/", $spp['tahun']);

        if ($bulan === "Juli" OR $bulan === "Agustus" OR $bulan === "September" OR $bulan === "Oktober" OR $bulan === "November" OR $bulan === "Desember") {
            $data_tahun = $tahun[0];
        }else{
            $data_tahun = $tahun[1];
        }
        
        $data=[
            'id_pembayaran' => $id,
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nisn' => $nisn,
            'tgl_bayar' => tanggal(),
            'bulan_dibayar' => $bulan,
            'tahun_dibayar' => $data_tahun,
            'id_spp' => $id_spp,
            'jumlah_bayar'=> $spp['nominal_bulan']
        ];

        
        $this->db->trans_start();
        $this->db->insert('tb_pembayaran',$data);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            
            $this->db->trans_rollback();
            return FALSE;
        }else{
            $this->db->trans_commit();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       Transaksi Pembayaran <strong>SPP</strong> berhasil !
                      </div>
                    </div>');

         redirect('entri-pembayaran/pembayaran/dataPembayaran/'.$nisn);
        }
    }



}
 
