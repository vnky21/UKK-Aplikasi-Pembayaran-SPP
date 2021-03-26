<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_Model');
		not_admin();
	}

	// List all your items
	public function index()
	{

		$data['judul'] = 'Data Kelas';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = '';
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['kelas'] = $this->Crud_Model->get('tb_kelas');
		$data['jurusan'] = $this->Crud_Model->get('tb_jurusan');
		$user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];


		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required|is_unique[tb_kelas.nama_kelas]');
		$this->form_validation->set_rules('id_jurusan', 'Jurusan', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templete/header', $data);
			$this->load->view('templete/sidebar', $data);
			$this->load->view('v_index', $data);
			$this->load->view('templete/footer');
			$this->load->view('v_modal');
			$this->load->view('templete/script');
		} else {
			$id = $this->Kelas_Model->getID();
			$data = [
				'id_kelas' => $id,
				'nama_kelas' => $this->input->post('nama_kelas', true),
				'id_jurusan' => $this->input->post('id_jurusan', true)
			];

			$this->Crud_Model->insert('tb_kelas', $data);

			$this->session->set_flashdata('message', '<div " class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Kelas <strong>Berhasil</strong> Ditambahkan !
                      </div>
                    </div>');

			redirect('kelas');
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
			'nama_kelas' => $this->input->post('nama_kelas', true),
			'id_jurusan' => $this->input->post('id_jurusan', true)
		];

		$this->Crud_Model->update('tb_kelas', $data, 'id_kelas', $this->input->post('id_kelas', true));
		$this->session->set_flashdata('message', '<div  class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Kelas <strong>Berhasil</strong> Diedit !
                      </div>
                    </div>');

		redirect('kelas');
	}

	//Delete one item
	public function delete($id = NULL)
	{


		$this->Crud_Model->delete('tb_kelas', 'id_kelas', $id);
		$this->session->set_flashdata('message', '<div  class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       Kelas <strong>Berhasil</strong> Dihapus !
                      </div>
                    </div>');

		redirect('kelas');
	}

	public function getJsonKelas()
	{
		$output = [];

		$data = $this->Crud_Model->getWhere('tb_kelas', 'id_kelas', $this->input->post('id', true));

		$output['id_kelas'] = $data['id_kelas'];
		$output['nama_kelas'] = $data['nama_kelas'];
		$output['id_jurusan'] = $data['id_jurusan'];

		echo json_encode($output);
	}
}
