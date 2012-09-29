<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {
	//CHANGE THIs BASED ON DATABASE USER DEFINED
	
	private $t;
	private $_template;
	private $M_admin;

	function __construct()
	{
		parent::__construct();
		
		
		
		$ci =& get_instance();
		$this->t  	= $this->config->item('admin_template');
		$this->_template		= "templates/$this->t";
		
		
		
		
		
		//autoload
		//$this->M_admin = $this->load->model('M_g_admin');
		//$this->load->model('M_user');
		//$this->load->library('form_validation');
		
	}

	 function index()
	{
	
				//$user = $this->ion_auth->user()->row();
				//$data['user'] = $this->M_user->get_user();
				$this->template->set('title', 'Halaman Admin');
				$this->template->load($this->_template.'index', 'V_admin');
         
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */