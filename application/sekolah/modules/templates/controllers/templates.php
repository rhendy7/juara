<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//class to populate template either it fix template (like form, button and else) or layout template


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
	
	
	function step_wizard()
	{
		$this->load->view('default/step_wizard');
	}
	
	function input_mask()
	{
	
		$this->load->view('default/input_mask');
	
	}
	
	
	function modal_js()
	{
		$this->load->view('default/modal_js');
	
	
	}
	
	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
	}