<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Jurusan extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jurusan_Model');
		not_admin();
	}



	// List all your items
	public function index()
	{

		$data['judul'] = 'Data Jurusan';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['jurusan'] = $this->Crud_Model->get('tb_jurusan');
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];


		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required|is_unique[tb_jurusan.jurusan]');


		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templete/header', $data);
			$this->load->view('templete/sidebar', $data);
			$this->load->view('v_index', $data);
			$this->load->view('templete/footer');
			$this->load->view('v_modal');
			$this->load->view('templete/script');
		} else {
			$id = $this->Jurusan_Model->getID();
			$data = [
				'id_jurusan' => $id,
				'jurusan' => $this->input->post('jurusan', true),
			];

			$this->Crud_Model->insert('tb_jurusan', $data);

			$this->session->set_flashdata('message', '<div style="background-color:#3cb371;" class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Jurusan <strong>Berhasil</strong> Ditambahkan !
                      </div>
                    </div>');

			redirect('jurusan');
		}
	}

	// Add a new item
	public function add()
	{
	}

	//Update one item
	public function edit($id = NULL)
	{
		$data = [
			'jurusan' => $this->input->post('jurusan', true)
		];

		$this->Crud_Model->update('tb_jurusan', $data, 'id_jurusan', $this->input->post('id_jurusan', true));
		$this->session->set_flashdata('message', '<div  class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Jurusan <strong>Berhasil</strong> Diedit !
                      </div>
                    </div>');

		redirect('jurusan');
	}

	//Delete one item
	public function delete($id = NULL)
	{
		$this->Crud_Model->delete('tb_jurusan', 'id_jurusan', $id);
		$this->session->set_flashdata('message', '<div style="background-color:#3cb371;" class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       Jurusan <strong>Berhasil</strong> Dihapus !
                      </div>
                    </div>');

		redirect('jurusan');
	}

	public function getJsonJurusan()
	{
		$output = [];

		$data = $this->Crud_Model->getWhere('tb_jurusan', 'id_jurusan', $this->input->post('id', true));

		$output['id_jurusan'] = $data['id_jurusan'];
		$output['jurusan'] = $data['jurusan'];

		echo json_encode($output);
	}
}
