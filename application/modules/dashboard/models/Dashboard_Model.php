<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{

	public function getPembayaranBulanIni()
	{
		$data = bulan() . ' ' . date('Y');

		$this->db->like('tgl_bayar', $data);
		$this->db->from('tb_pembayaran');
		return $this->db->count_all_results();
	}

	public function getPembayaranLimit()
	{
		$this->db->select('*');
		$this->db->from('tb_pembayaran');
		$this->db->join('tb_petugas', 'tb_pembayaran.id_petugas = tb_petugas.id_petugas');
		$this->db->order_by('id_pembayaran', 'desc');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}

	public function getDataChart()
	{
		$data = [
			['bulan' => 'Januari'], ['bulan' => 'Februari'], ['bulan' => 'Maret'], ['bulan' => 'April'], ['bulan' => 'Mei'],
			['bulan' => 'Juni'], ['bulan' => 'Juli'], ['bulan' => 'Agustus'], ['bulan' => 'September'], ['bulan' => 'Oktober'],
			['bulan' => 'November'], ['bulan' => 'Desember']
		];

		foreach ($data as $key => $value) {
			$periode = $value['bulan'] . ' ' . date('Y');
			$this->db->like('tgl_bayar', $periode);
			$this->db->from('tb_pembayaran');
			$result = $this->db->count_all_results();;
			if ($result === null) {
				$data_chart[] = 0;
			} else {
				$data_chart[] = $result;
			}
		}

		return $data_chart;
	}
}



/* End of file Dashboard_Model.php */
/* Location: ./application/modules/dashboard/models/Dashboard_Model.php */
