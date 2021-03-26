<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Spp_Model');
		not_admin();

		
	}


	// List all your items
	public function index(){
		
		$data['judul'] = 'Data SPP';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = ''; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['spp']=$this->Crud_Model->get('tb_spp');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];


		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required|is_unique[tb_spp.tahun]');
		$this->form_validation->set_rules('nominal_bulan', 'Nominal per Bulan', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_index',$data);
			$this->load->view('templete/footer');
			$this->load->view('v_modal');
			$this->load->view('templete/script');

		} else {


			$id=$this->Spp_Model->getID();

			$nominal_bulan= str_replace('.', '', $this->input->post('nominal_bulan'));
			$nominal_tahun = $nominal_bulan * 12;

			$data=[
				'id_spp' => $id,
				'tahun' => $this->input->post('tahun',true),
				'nominal_bulan' => $nominal_bulan,
				'nominal_tahun' => $nominal_tahun
			];

			$this->Crud_Model->insert('tb_spp',$data);

			$this->session->set_flashdata('message', '<div style="background-color:#3cb371;" class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       Data SPP <strong>Berhasil</strong> Ditambahkan !
                      </div>
                    </div>');

      redirect('spp');
		}

		
	}

	// Add a new item
	public function add(){

	
	
	}

	//Update one item
	public function edit( $id = NULL ){

			$this->form_validation->set_rules('nominal_bulan', 'Nominal per Bulan', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				$nominal_bulan= str_replace('.', '', $this->input->post('nominal_bulan'));
				$nominal_tahun = $nominal_bulan * 12;

				$data=[
					'tahun' => $this->input->post('tahun',true),
					'nominal_bulan' => $nominal_bulan,
					'nominal_tahun' => $nominal_tahun
				];

					

				$this->Crud_Model->update('tb_spp',$data,'id_spp',$this->input->post('id_spp'));

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       Data SPP <strong>Berhasil</strong> Ditambahkan !
                      </div>
                    </div>');

     	 redirect('spp');

			} else {

				redirect('spp');



			}

			

	}

	//Delete one item
	public function delete( $id = NULL ){
		$this->Crud_Model->delete('tb_spp','id_spp',$id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       Data SPP <strong>Berhasil</strong> Dihapus !
                      </div>
                    </div>');

      redirect('spp');

	}

	public function getJsonSpp(){
		$output=[];

		$data=$this->Crud_Model->getWhere('tb_spp','id_spp',$this->input->post('id',true));

		$output['id_spp']=$data['id_spp'];
		$output['tahun']=$data['tahun'];
		$output['nominal_bulan']=$data['nominal_bulan'];

		echo json_encode($output);
	}
}
