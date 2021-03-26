<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Histori_Model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->query("SELECT `tb_pembayaran`.`id_pembayaran`,`tb_pembayaran`.`bulan_dibayar`,`tb_pembayaran`.`tgl_bayar`,`tb_pembayaran`.`jumlah_bayar`,`tb_petugas`.`nama_petugas`,`tb_siswa`.`nama` FROM `tb_pembayaran` 
                                 JOIN `tb_siswa` ON `tb_pembayaran`.`nisn` = `tb_siswa`.`nisn`
                                 JOIN `tb_petugas` ON `tb_pembayaran`.`id_petugas` = `tb_petugas`.`id_petugas` 
                                 ORDER BY `id_pembayaran` DESC");
        return $query->result_array();
    }

    public function getByNisn($nisn)
    {
        $query = $this->db->query("SELECT `tb_pembayaran`.`id_pembayaran`,`tb_pembayaran`.`tahun_dibayar`,`tb_pembayaran`.`bulan_dibayar`,`tb_pembayaran`.`tgl_bayar`,`tb_pembayaran`.`jumlah_bayar`,`tb_petugas`.`nama_petugas`,`tb_siswa`.`nama` FROM `tb_pembayaran` 
                                 JOIN `tb_siswa` ON `tb_pembayaran`.`nisn` = `tb_siswa`.`nisn`
                                 JOIN `tb_petugas` ON `tb_pembayaran`.`id_petugas` = `tb_petugas`.`id_petugas`
                                 WHERE `tb_pembayaran`.`nisn` = $nisn 
                                 ORDER BY `id_pembayaran` DESC");
        return $query->result_array();
    }

    public function getPembayaranByNisn($nisn)
    {
        $query = $this->db->query("SELECT * FROM `tb_pembayaran` 
                                 JOIN `tb_siswa` ON `tb_pembayaran`.`nisn` = `tb_siswa`.`nisn`
                                 JOIN `tb_petugas` ON `tb_pembayaran`.`id_petugas` = `tb_petugas`.`id_petugas`
                                 WHERE `tb_pembayaran`.`nisn` = $nisn 
                                 ORDER BY `id_pembayaran` DESC");
        return $query->result_array();
    }

    public function getPembayaranById($id)
    {
        $query = $this->db->query("SELECT * FROM `tb_pembayaran` 
                                 JOIN `tb_siswa` ON `tb_pembayaran`.`nisn` = `tb_siswa`.`nisn`
                                 JOIN `tb_petugas` ON `tb_pembayaran`.`id_petugas` = `tb_petugas`.`id_petugas`
                                 JOIN `tb_spp` ON `tb_pembayaran`.`id_spp` = `tb_spp`.`id_spp`
                                 JOIN `tb_kelas` ON `tb_siswa`.`id_kelas` = `tb_kelas`.`id_kelas`
                                 WHERE `tb_pembayaran`.`id_pembayaran` = '$id' ");
        return $query->row_array();
    }

    public function getBulan()
    {
        $data = [
            ['bulan' => 'Januari'], ['bulan' => 'Februari'], ['bulan' => 'Maret'], ['bulan' => 'April'], ['bulan' => 'Mei'],
            ['bulan' => 'Juni'], ['bulan' => 'Juli'], ['bulan' => 'Agustus'], ['bulan' => 'September'], ['bulan' => 'Oktober'],
            ['bulan' => 'November'], ['bulan' => 'Desember']
        ];
        return $data;
    }

    public function getTahun()
    {

        $y = date('Y') - 5;
        $x = date('Y');
        for ($i = $x; $i > $y; $i--) {
            $tahun[] = $i;
        }

        return $tahun;
    }


    public function getPembayaranPeriode($bulan = null, $tahun = null)
    {
        $periode = $bulan . ' ' . $tahun;
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_siswa', 'tb_pembayaran.nisn = tb_siswa.nisn');
        $this->db->join('tb_petugas', 'tb_pembayaran.id_petugas = tb_petugas.id_petugas');
        $this->db->like('tgl_bayar', $periode);
        $this->db->order_by('id_pembayaran', 'desc');
        $data = $this->db->get()->result_array();

        if (empty($data)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body"><button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button> <b>Data Pembayaran </b> tidak ada  </div> </div>');

            redirect('histori-pembayaran/histori/cariPeriode');
        } else {
            return $data;
        }
    }
}
