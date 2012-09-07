<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//class to populate  fix template (like form, button and else) or layout template


class Templates extends MX_Controller {
	//CHANGE THIs BASED ON DATABASE USER DEFINED
	
	//declaration for template for admin
	private $t;
	private $_template;

	

	function __construct()
	{
		parent::__construct();

		
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$this->load->view('default/css');
    }
	
	
	public function jquery ()
	{
		$this->load->view('default/jquery');
	
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
	}