<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Left_bar extends MX_Controller {
	//CHANGE THIs BASED ON DATABASE USER DEFINED
	
	
	function __construct()
	{
		parent::__construct();

		
		$this->load->library('tank_auth');
		if($this->tank_auth->is_logged_in(FALSE)) {
			redirect('auth');
		
		}
		
	}

	public function index()
	{
		
		
		$this->load->view('V_admin_left_bar');
		
        
              
               
                
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */