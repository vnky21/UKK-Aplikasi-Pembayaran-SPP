<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Histori_Model');
	}

	public function index()
	{

		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['user'] = $this->Crud_Model->getDetailSiswa($this->session->userdata('nisn'));
		$data['pembayaran'] = $this->Histori_Model->getByNisn($this->session->userdata('nisn'));
		$data['nama'] = $data['user']['nama'];

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('siswa/v_index', $data);
		$this->load->view('templete/footer');
		$this->load->view('v_modal');
		$this->load->view('templete/script');
	}
}

/* End of file Siswa.php */
/* Location: ./application/modules/histori-pembayaran/controllers/Siswa.php */
