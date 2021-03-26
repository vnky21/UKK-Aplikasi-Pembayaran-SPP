<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Model extends CI_Model
{

    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM `tb_pembayaran` 
                                 JOIN `tb_siswa` ON `tb_pembayaran`.`nisn` = `tb_siswa`.`nisn`
                                 JOIN `tb_kelas` ON `tb_siswa`.`id_kelas` = `tb_kelas`.`id_kelas`
                                 JOIN `tb_petugas` ON `tb_pembayaran`.`id_petugas` = `tb_petugas`.`id_petugas` 
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

    public function getLaporanTahunan($tahun)
    {
        $bulan = [
            ['bulan' => 'Januari'], ['bulan' => 'Februari'], ['bulan' => 'Maret'], ['bulan' => 'April'], ['bulan' => 'Mei'],
            ['bulan' => 'Juni'], ['bulan' => 'Juli'], ['bulan' => 'Agustus'], ['bulan' => 'September'], ['bulan' => 'Oktober'],
            ['bulan' => 'November'], ['bulan' => 'Desember']
        ];

        foreach ($bulan as $key => $value) {
            $periode = $value['bulan'] . ' ' . $tahun;
            $this->db->like('tgl_bayar', $periode);
            $this->db->select_sum('jumlah_bayar');
            $result = $this->db->get('tb_pembayaran')->row_array();
            $data[] = ['total' => $result['jumlah_bayar']];
        }

        return $data;
    }

    public function getLaporanBulanan($periode)
    {
        $query = $this->db->query("SELECT * FROM `tb_pembayaran` 
                                 JOIN `tb_siswa` ON `tb_pembayaran`.`nisn` = `tb_siswa`.`nisn`
                                 JOIN `tb_kelas` ON `tb_siswa`.`id_kelas` = `tb_kelas`.`id_kelas`
                                 JOIN `tb_petugas` ON `tb_pembayaran`.`id_petugas` = `tb_petugas`.`id_petugas` 
                                 WHERE `tgl_bayar` LIKE '%$periode%'
                                 ORDER BY `id_pembayaran` DESC");
        return $query->result_array();
    }

    public function getTotalTahunan($tahun)
    {
        $this->db->like('tgl_bayar', $tahun);
        $this->db->select_sum('jumlah_bayar');
        $result = $this->db->get('tb_pembayaran')->row_array();


        return $result['jumlah_bayar'];
    }

    public function getTotalBulanan($periode)
    {
        $this->db->like('tgl_bayar', $periode);
        $this->db->select_sum('jumlah_bayar');
        $result = $this->db->get('tb_pembayaran')->row_array();


        return $result['jumlah_bayar'];
    }


    public function getTotal()
    {

        $this->db->select_sum('jumlah_bayar');
        $result = $this->db->get('tb_pembayaran')->row_array();

        return $result['jumlah_bayar'];
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
}
