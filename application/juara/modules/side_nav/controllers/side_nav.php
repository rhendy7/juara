<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Side_nav extends MX_Controller {
	//CHANGE THIs BASED ON DATABASE USER DEFINED
	
	
	function __construct()
	{
		parent::__construct();

		
		
		
		
	}

	function index()
	{
		
		
		$this->load->view('V_admin_side_nav');
		
        
              
               
                
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */