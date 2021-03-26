<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Petugas_Model');
		not_admin();

		
	}

	// List all your items
	public function index(){
		
		$data['judul'] = 'Data Petugas';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = ''; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['petugas']=$this->Crud_Model->get('tb_petugas');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];


		$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tb_petugas.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_index',$data);
			$this->load->view('templete/footer');
			$this->load->view('v_modal');
			$this->load->view('templete/script');

		} else {
			$id=$this->Petugas_Model->getID();
			$data=[
				'id_petugas' => $id,
				'nama_petugas' => $this->input->post('nama_petugas',true),
				'username' => $this->input->post('username',true),
				'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT),
				'level' => $this->input->post('level'),
				'time' => time()
			];

			$this->Crud_Model->insert('tb_petugas',$data);

			$this->session->set_flashdata('message', '<div style="background-color:#3cb371;" class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Petugas <strong>Berhasil</strong> Ditambahkan !
                      </div>
                    </div>');

      redirect('petugas');
		}

		

	}

	// Add a new item
	public function add(){

	}

	//Update one item
	public function edit( $id = NULL ){
		$data=[
			'nama_petugas' => $this->input->post('nama_petugas')
		];

		$this->Crud_Model->update('tb_petugas',$data,'id_petugas',$this->input->post('id_petugas'));
		$this->session->set_flashdata('message', '<div style="background-color:#3cb371;" class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Petugas <strong>Berhasil</strong> Diedit !
                      </div>
                    </div>');

      redirect('petugas');

	}

	//Delete one item
	public function delete( $id = NULL ){
		$this->Crud_Model->delete('tb_petugas','id_petugas',$id);
		$this->session->set_flashdata('message', '<div style="background-color:#3cb371;" class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Petugas <strong>Berhasil</strong> Dihapus !
                      </div>
                    </div>');

      redirect('petugas');

	}

	public function getJsonPetugas(){
		$output=[];

		$data=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->input->post('id',true));

		$output['id_petugas']=$data['id_petugas'];
		$output['nama_petugas']=$data['nama_petugas'];

		echo json_encode($output);
	}
}
