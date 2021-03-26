<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct(){
		parent::__construct();	
		not_admin();
	}


	// List all your items
	public function index(){
		
		$data['judul'] = 'Manajemen User'; 
		$data['subjudul'] = 'Admin'; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['petugas']=$this->Crud_Model->getWhereTable('tb_petugas','level','Admin');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];

			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('admin/v_index',$data);
			$this->load->view('templete/footer');
			$this->load->view('templete/script');

	}

	// Add a new item
	public function add(){

	}

	//Update one item
	public function edit( $id = NULL ){

		$data['judul'] = 'Manajemen User'; 
		$data['subjudul'] = 'Admin'; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['petugas'] = $this->Crud_Model->getWhere('tb_petugas','id_petugas',$id);
		$user = $this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];
		$data['level'] = [[ 'level' => 'Admin'],
		                  [ 'level' => 'Petugas']];


		if ($this->input->post('jenis-form') == 'edit-username' ) {

			$this->form_validation->set_rules('id_petugas', 'ID Petugas', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tb_petugas.username]');
					
		}
			elseif ($this->input->post('jenis-form') == 'edit-password') {

			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|matches[password]');

	   }
		
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('admin/v_edit',$data);
			$this->load->view('templete/footer');
			$this->load->view('templete/script');

		} else {

			if ($this->input->post('jenis-form') == 'edit-username') {

				$data=[
					'username' => $this->input->post('username',true),
					'level' => $this->input->post('level',true)
				];

				$this->Crud_Model->update('tb_petugas',$data,'id_petugas',$this->input->post('id_petugas'));

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Petugas <strong>Berhasil</strong> Diubah !
                      </div>
                    </div>');

     		 redirect('manajemen-user/admin/edit/'.$id);

      		}


			elseif ($this->input->post('jenis-form') == 'edit-password') {


				$data=[
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
				];

				$this->Crud_Model->update('tb_petugas',$data,'id_petugas',$id);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       Edit Password Petugas <strong>Berhasil</strong> Diubah !
                      </div>
                    </div>');

     		 redirect('manajemen-user/admin/edit/'.$id);

			}

					

		}

			


	}

	
}
