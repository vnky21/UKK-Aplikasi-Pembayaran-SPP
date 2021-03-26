<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends MY_Controller {
		

	public function __construct(){
	parent::__construct();

	}

	public function index(){
		$data['judul'] = 'Dashboard';
		$data['siswa'] = $this->db->count_all_results('tb_siswa');
		$data['subjudul'] = ''; 
        $data['user'] = $this->Crud_Model->getDetailSiswa($this->session->userdata('nisn'));
		$data['nama'] = $data['user']['nama'];

        $this->load->view('templete/header',$data);
        $this->load->view('templete/sidebar',$data);
		$this->load->view('v_siswa');
		$this->load->view('templete/footer');
		$this->load->view('templete/script');
		
	}
}

/* End of file Siswa.php */
/* Location: ./application/modules/dashboard/controllers/Siswa.php */
 ?>