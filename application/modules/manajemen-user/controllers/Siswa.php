<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Siswa extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Manajemen_Model');
  }
 
 	public function index(){
    $data['judul'] = 'Manajemen User'; 
    $data['subjudul'] = 'Siswa'; 
    $data['menu'] = $this->subJudul();
    $data['navbar_admin'] = $this->navBarAdmin();
    $data['kelas']=$this->Crud_Model->get('tb_kelas');
    $data['spp']=$this->Crud_Model->get('tb_spp');
    $user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
    $data['nama'] = $user['nama_petugas'];
    if ($this->input->get('id_kelas')) {
      $kelas=$this->input->get('id_kelas',true);
      $data['siswa']=$this->Manajemen_Model->getCariSiswa($kelas);
    }else{
      $data['siswa']=$this->Manajemen_Model->getSiswa();
    }

      $this->load->view('templete/header',$data);
      $this->load->view('templete/sidebar',$data);
      $this->load->view('siswa/v_index',$data);
      $this->load->view('templete/footer');
      $this->load->view('templete/script'); 
  }


    public function resetPassword($nisn){
    $data['judul'] = 'Ganti Password';
    $data['subjudul'] = ''; 
    $data['menu'] = $this->subJudul();
    $data['navbar_admin'] = $this->navBarAdmin();
    $data['siswa'] = $this->Crud_Model->getDetailSiswa($nisn);
    $user=$this->Crud_Model->getWhere('tb_petugas','id_petugas',$this->session->userdata('id_petugas'));
    $data['nama'] = $user['nama_petugas'];

    $this->form_validation->set_rules('password', 'Password Baru', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password1', 'Konfirmasi Password Baru', 'trim|required|matches[password]');
        
        if ($this->form_validation->run() == FALSE) {
        
      $this->load->view('templete/header',$data);
      $this->load->view('templete/sidebar',$data);
      $this->load->view('siswa/v_reset_password',$data);
      $this->load->view('templete/footer');
      $this->load->view('templete/script');
      
        } else {

          $password = $this->input->post('password',true);

            $data=[
              'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->Crud_Model->update('tb_siswa',$data,'nisn',$data['siswa']['nisn']);

             $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Ganti Password <b>Berhasil</b> !
                      </div>
                    </div>');

            redirect('manajemen-user/siswa/resetPassword/'.$nisn);       
        }
        


  }
 		


 	public function gantiPassword(){
 		$data['judul'] = 'Ganti Password';
		$data['subjudul'] = ''; 
    $data['user'] = $this->Crud_Model->getDetailSiswa($this->session->userdata('nisn'));
		$data['nama'] = $data['user']['nama'];
     $this->session->set_flashdata('default', '<div class="alert alert-danger alert-has-icon alert-dismissible show fade ">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                             <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Perhatian</div>
                        Jika anda lupa <b>Password Lama</b>,harap melapor kepada <b>Admin</b> !
                      </div>
                    </div>');

		$this->form_validation->set_rules('old-password', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password Baru', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password1', 'Konfirmasi Password Baru', 'trim|required|matches[password]');
        
        if ($this->form_validation->run() == FALSE) {
        

			$this->load->view('templete/header',$data);
      $this->load->view('templete/sidebar',$data);
			$this->load->view('siswa/v_ganti_password',$data);
			$this->load->view('templete/footer');
			$this->load->view('templete/script');

        } else {
          $old_password = $this->input->post('old-password',true);
          $password = $this->input->post('password',true);


          if (password_verify($old_password,$data['user']['password'])) {

            $data=[
              'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->Crud_Model->update('tb_siswa',$data,'nisn',$this->session->userdata('nisn'));

             $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Ganti Password <b>Berhasil</b> !
                      </div>
                    </div>');

            redirect('manajemen-user/siswa/gantiPassword');

            
          }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-has-icon alert-dismissible show fade ">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                             <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Passoword Lama anda salah !</div>
                       </div>
                    </div>');

            redirect('manajemen-user/siswa/gantiPassword');

          }
        	
        }
        


 	}
 
 }
 
 /* End of file Siswa.php */
 /* Location: ./application/modules/manajemen-user/controllers/Siswa.php */ ?>