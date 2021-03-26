<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller{

  public function __construct()
  {
  	parent::__construct();

  }

   public function index(){

      $this->load->view('auth/v_index');

   }



   public function petugas(){
     $this->form_validation->set_rules('username', 'Username', 'trim|required');
     $this->form_validation->set_rules('password', 'Password', 'trim|required');
     
     if ($this->form_validation->run() == FALSE) {

         $this->load->view('auth/v_login_petugas');
     
     } else {

      $username= $this->input->post('username',true);
      $password= $this->input->post('password',true);
        
        $user=$this->Crud_Model->getWhere('tb_petugas','username',$username);

        if($user){

          if (password_verify($password, $user['password'])) {
            
    
              $data=[
                'username' => $username,
                'level' => $user['level'],
                'id_petugas' => $user['id_petugas']
              ];

              $this->session->set_userdata($data);
              redirect('dashboard');

        

          }else{
               $this->session->set_flashdata('message','  <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Password anda salah !
                      </div>
                    </div>');

          redirect('auth/petugas');

          }

        }else{
          $this->session->set_flashdata('message','  <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Username atau password salah !
                      </div>
                    </div>');

          redirect('auth/petugas');
        }

      
     }

   }  



   public function siswa(){
      $this->form_validation->set_rules('nisn', 'NISN', 'trim|required');
     $this->form_validation->set_rules('password', 'Password', 'trim|required');
     
     if ($this->form_validation->run() == FALSE) {

         $this->load->view('auth/v_login_siswa');
     
     } else {

      $nisn= $this->input->post('nisn',true);
      $password= $this->input->post('password',true);
        
        $user=$this->Crud_Model->getWhere('tb_siswa','nisn',$nisn);

        if($user){

          if (password_verify($password, $user['password'])) {
            
    
              $data=[
                'nisn' => $nisn,
                'level' => 'Siswa'
              ];

              $this->session->set_userdata($data);
              redirect('dashboard/siswa');

        

          }else{
               $this->session->set_flashdata('message','  <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Password anda salah !
                      </div>
                    </div>');

          redirect('auth/siswa');

          }

        }else{
          $this->session->set_flashdata('message','  <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        NISN tidak terdaftar !
                      </div>
                    </div>');

          redirect('auth/siswa');
        }

      
     }


   }


   public function logout(){

   	$this->session->unset_userdata('id_petugas');
    $this->session->unset_userdata('nama_petugas');
    $this->session->unset_userdata('level');
   	redirect('auth');

   }

   public function not_found(){
    $this->output->set_status_header('404');
    $this->load->view('templete/404');
   }


}