<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Latest_news extends MX_Controller {
	//CHANGE THIs BASED ON DATABASE USER DEFINED
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_latest_news');
		$this->load->helper('text');
		
		
		
	}

	function index()
	{
		
		
		
		$data['list'] = $this->M_latest_news->get_news();
		$this->load->view('V_latest_news',$data);
		
        
              
               
                
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */