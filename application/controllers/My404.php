<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends My_Controller {

	public function index()
	{
	        $this->output->set_status_header('404');
			$this->load->view('templete/404');
	}

}

/* End of file Error.php */
/* Location: ./application/controllers/Error.php */
 ?>