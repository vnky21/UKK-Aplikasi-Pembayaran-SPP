<?php
     
     function not_admin(){
     	$ci =& get_instance();
        
        if ($ci->session->userdata('level')) {
     
     	if ($ci->session->userdata('level') !== 'Admin') {
     		redirect('my404');
     	}
     }else{
     	redirect('my404');
     }
    }
 ?>				