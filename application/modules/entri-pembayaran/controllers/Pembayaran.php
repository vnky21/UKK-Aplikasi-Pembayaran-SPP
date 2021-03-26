<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pembayaran_Model');

		
	}


	private function getBulan(){
		return $bulan=[				
						['bulan' => 'Juli'],['bulan' => 'Agustus'],['bulan' => 'September'],
						['bulan' => 'Oktober'],['bulan' => 'November'],['bulan' => 'Desember'],
						['bulan' => 'Januari'],['bulan' => 'Februari'],['bulan' => 'Maret'],
						['bulan' => 'April'],['bulan' => 'Mei'],['bulan' => 'Juni']
		              ];
	}


	// List all your items
	public function index(){
		
		$data['judul'] = 'Entri Pembayaran';
		$data['subjudul'] = ''; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['spp']=$this->Crud_Model->get('tb_spp');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];

			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_index',$data);
			$this->load->view('templete/footer');
			$this->load->view('v_modal');
			$this->load->view('templete/script');

		
	}

	public function redirect(){

		redirect('entri-pembayaran/pembayaran/dataPembayaran/'.$this->input->post('nisn'));
	}


	public function dataPembayaran($nisn=null){	
		if ($nisn != '') {

			$siswa=$this->Crud_Model->getWhere('tb_siswa','nisn',$nisn);
		
		if ($siswa) {
			$data['judul'] = 'Entri Pembayaran';
			$data['subjudul'] = ''; 
			$data['bulan']=$this->getBulan();
			$data['menu'] = $this->subJudul();
			$data['navbar_admin'] = $this->navBarAdmin();
			$data['spp']=$this->Crud_Model->get('tb_spp');
			$data['kelas']=$this->Crud_Model->get('tb_kelas');
			$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
			$data['nama'] = $user['nama_petugas'];
			$data['siswa'] = $this->Crud_Model->getDetailSiswa($nisn);
			$data['data']=$this->Pembayaran_Model->getDataPembayaran($nisn,$data['siswa']['id_spp']);
			$data['total'] = $this->Pembayaran_Model->getTotalPembayaranByNisn($nisn);
			$data['pembayaran']=$this->Pembayaran_Model->getPembayaranByNisn($nisn);

			 
		    $this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_pembayaran',$data);
			$this->load->view('templete/footer');
			$this->load->view('v_modal');
			$this->load->view('templete/script');

 
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body"><button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button> NISN siswa tidak ditemukan </div> </div>');

     	 redirect('entri-pembayaran/pembayaran');
        }
		}else{

						$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body"><button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button> NISN siswa tidak ditemukan </div> </div>');

     	 redirect('entri-pembayaran/pembayaran/');

		}

	}


	public function transaksi($nisn = null,$id_spp = null,$bulan= null){
		$this->Pembayaran_Model->entri($nisn,$id_spp,$bulan);

	}

	public function getJsonDataPembayar(){	
		$output = [];

		$data = $this->Crud_Model->getWhere('tb_siswa', 'nisn', $this->input->post('id', true));

		$output['nisn'] = $data['nisn'];
		$output['nama'] = $data['nama'];
		$output['id_spp'] = $data['id_spp'];
		$output['id_kelas'] = $data['id_kelas'];


		echo json_encode($output);
	}


}


