<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_Model');
	}

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['subjudul'] = '';
		$data['siswa'] = $this->db->count_all_results('tb_siswa');
		$data['kelas'] = $this->db->count_all_results('tb_kelas');
		$data['spp'] = $this->db->count_all_results('tb_spp');
		$data['pembayaran'] = $this->Dashboard_Model->getPembayaranBulanIni();
		$data['histori_pembayaran'] = $this->Dashboard_Model->getPembayaranLimit();
		$data['menu'] = $this->subJudul();
		$data['data_chart'] = $this->Dashboard_Model->getDataChart();
		$data['navbar_admin'] = $this->navBarAdmin();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_index');
		$this->load->view('templete/footer');
		$this->load->view('templete/script_dashboard', $data);
	}
}
