<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends MY_Controller {

   
	public function __construct(){
		parent::__construct();
		$this->load->model('Siswa_Model');
		not_admin();
		
	}

	// List all your items
	public function index(){
		
		$data['judul'] = 'Data Siswa';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = ''; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['kelas']=$this->Crud_Model->get('tb_kelas');
		$data['spp']=$this->Crud_Model->get('tb_spp');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];
		if ($this->input->get('id_kelas')) {
			$kelas=$this->input->get('id_kelas',true);
			$data['siswa']=$this->Siswa_Model->getCariSiswa($kelas);
		}else{
			$data['siswa']=$this->Siswa_Model->getSiswa();
		}

			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_index',$data);
			$this->load->view('templete/footer');
			$this->load->view('templete/script');	
	}

	public function add(){

		$data['judul'] = 'Tambah Data Siswa';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = ''; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['kelas']=$this->Crud_Model->get('tb_kelas');
		$data['spp']=$this->Crud_Model->get('tb_spp');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];
         
    		$this->form_validation->set_rules('nisn','NISN','trim|required|is_unique[tb_siswa.nisn]|numeric|min_length[10]');
			$this->form_validation->set_rules('nis','NIS','trim|required|is_unique[tb_siswa.nis]|numeric');
			$this->form_validation->set_rules('nama','Nama Siswa','trim|required');
			$this->form_validation->set_rules('telp','Nomor Telepon','trim|required|numeric');
			$this->form_validation->set_rules('alamat','Alamat','trim|required');
			$this->form_validation->set_rules('id_kelas','Kelas','trim|required');
			$this->form_validation->set_rules('id_spp','Tahun SPP','trim|required');	

		if ($this->form_validation->run() == FALSE) {
    
			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_add',$data);
			$this->load->view('templete/footer');
			$this->load->view('v_modal');
			$this->load->view('templete/script');	

		} else {
            //aksi simpan data siswa
        $nisn=str_replace(' ', '', $this->input->post('nisn'));
		$nis=str_replace(' ', '', $this->input->post('nis'));
		$telp=str_replace(' ', '', $this->input->post('telp'));
      
			$data=[
				'nisn' => $this->input->post('nisn',true),
				'nis' => $this->input->post('nis',true),
				'nama' => $this->input->post('nama',true),
				'id_kelas' => $this->input->post('id_kelas',true),
				'alamat' => $this->input->post('alamat',true),
				'no_telp' => $this->input->post('telp',true),
				'id_spp' => $this->input->post('id_spp',true),
				'password' => password_hash($nisn, PASSWORD_DEFAULT)
			];

			$this->Crud_Model->insert('tb_siswa',$data);

			$this->session->set_flashdata('message', '<div " class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Data Siswa <strong>Berhasil</strong> Ditambahkan !
                      </div>
                    </div>');

     		 redirect('siswa');

			

		}
	}

	//Update one item
	public function edit( $nisn = NULL ){

		$data['judul'] = 'Edit Data Siswa';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = ''; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['siswa'] = $this->Crud_Model->getWhere('tb_siswa','nisn',$nisn);
		$data['kelas']=$this->Crud_Model->get('tb_kelas');
		$data['spp']=$this->Crud_Model->get('tb_spp');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];


			

			$this->form_validation->set_rules('nisn','NISN','trim|required');
			$this->form_validation->set_rules('nis','NIS','trim|required|numeric');
			$this->form_validation->set_rules('nama','Nama Siswa','trim|required');
			$this->form_validation->set_rules('telp','Nomor Telepon','trim|required|numeric');
			$this->form_validation->set_rules('alamat','Alamat','trim|required');
			$this->form_validation->set_rules('id_kelas','Kelas','trim|required');
			$this->form_validation->set_rules('id_spp','Tahun SPP','trim|required');
 
	

		if ($this->form_validation->run() == FALSE) {
    
			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_edit',$data);
			$this->load->view('templete/footer');
			$this->load->view('templete/script');	

		} else {
            //aksi simpan data siswa
        $nisn=str_replace(' ', '', $this->input->post('nisn'));
		$nis=str_replace(' ', '', $this->input->post('nis'));
		$telp=str_replace(' ', '', $this->input->post('telp'));
      
			$data=[
				'nis' => $this->input->post('nis',true),
				'nama' => $this->input->post('nama',true),
				'id_kelas' => $this->input->post('id_kelas',true),
				'alamat' => $this->input->post('alamat',true),
				'no_telp' => $this->input->post('telp',true),
				'id_spp' => $this->input->post('id_spp',true),
				'password' => password_hash($nisn, PASSWORD_DEFAULT)
			];

			$this->Crud_Model->update('tb_siswa',$data,'nisn',$nisn);

			$this->session->set_flashdata('message', '<div " class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Data Siswa <strong>Berhasil</strong> Diubah !
                      </div>
                    </div>');

     		 redirect('siswa');

			

		}

	}

	public function detail($nisn){
		$data['judul'] = 'Edit Data Siswa';
		$data['dropdown'] = 'Data';
		$data['subjudul'] = ''; 
		$data['menu'] = $this->subJudul();
		$data['navbar_admin'] = $this->navBarAdmin();
		$data['siswa'] = $this->Crud_Model->getWhere('tb_siswa','nisn',$nisn);
		$data['siswa'] = $this->Siswa_Model->getDetailSiswa($nisn);
		$data['spp']=$this->Crud_Model->get('tb_spp');
		$user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
		$data['nama'] = $user['nama_petugas'];

			$this->load->view('templete/header',$data);
        	$this->load->view('templete/sidebar',$data);
			$this->load->view('v_detail',$data);
			$this->load->view('templete/footer');
			$this->load->view('templete/script');	

	}

	//Delete one item
	public function delete( $nisn ){
		$this->Crud_Model->delete('tb_siswa','nisn',$nisn);
		$this->session->set_flashdata('message', '<div  class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                      Data Siswa<strong>Berhasil</strong> Dihapus !
                      </div>
                    </div>');

      redirect('siswa');

	}

	public function naikKelas(){
		$nisn = $this->input->post('nisn',true);

		$data=[
			'id_spp' => $this->input->post('spp',true),
			'id_kelas' => $this->input->post('kelas',true)
		];

		$this->Crud_Model->update('tb_siswa',$data,'nisn',$nisn);
		$this->session->set_flashdata('message', '<div  class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                      Data Siswa<strong>Berhasil</strong> Update !
                      </div>
                    </div>');

		 redirect('entri-pembayaran/pembayaran/dataPembayaran/'.$nisn);
	}

}
