<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Histori extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Histori_Model');
	}

	public function search()
	{

		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_search', $data);
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
	}
	// List all your items

	public function index()
	{
		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['pembayaran'] = $this->Histori_Model->getAll();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_index', $data);
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
	}

	public function detail($id)
	{
		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];
		$data['pembayaran'] = $this->Histori_Model->getPembayaranById($id);

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_detail', $data);
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
	}

	public function cariPeriode()
	{
		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];
		$data['tahun'] = $this->Histori_Model->getTahun();
		$data['bulan'] = $this->Histori_Model->getBulan();

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_cari_periode', $data);
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
	}

	public function periodeBulan()
	{
		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];
		$bulan = $this->input->get('bulan', true);
		$tahun = $this->input->get('tahun', true);
		$data['pembayaran'] = $this->Histori_Model->getPembayaranPeriode($bulan, $tahun);

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_index', $data);
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
	}

	public function periodeTahun()
	{
		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];
		$tahun = $this->input->get('tahun', true);
		$data['pembayaran'] = $this->Histori_Model->getPembayaranPeriode($bulan = null, $tahun);

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_index', $data);
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
	}

	// List all your items
	public function cariSiswa()
	{

		$data['judul'] = 'Histori Pembayaran';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];

		$this->load->view('templete/header', $data);
		$this->load->view('templete/sidebar', $data);
		$this->load->view('v_cari_siswa', $data);
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
	}

	public function redirect()
	{
		redirect('histori-pembayaran/histori/siswa/' . $this->input->post('nisn'));
	}



	public function siswa($nisn = null)
	{
		if ($nisn != '') {

			$siswa = $this->Crud_Model->getWhere('tb_siswa', 'nisn', $nisn);

			if ($siswa) {
				$data['judul'] = 'Histori Pembayaran';
				$data['subjudul'] = '';
				$data['menu'] = $this->subJudul();
				$data['navbar_admin'] = $this->navBarAdmin();
				$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
				$data['nama'] = $user['nama_petugas'];
				$data['siswa'] = $this->Crud_Model->getDetailSiswa($nisn);
				$data['pembayaran'] = $this->Histori_Model->getPembayaranByNisn($nisn);

				$this->load->view('templete/header', $data);
				$this->load->view('templete/sidebar', $data);
				$this->load->view('v_siswa', $data);
				$this->load->view('templete/footer');

				$this->load->view('templete/script');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body"><button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button> NISN siswa tidak ditemukan </div> </div>');

				redirect('histori-pembayaran/histori');
			}
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body"><button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button> NISN siswa tidak ditemukan </div> </div>');

			redirect('histori-pembayaran/histori/');
		}
	}
}
