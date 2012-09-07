<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*halaman ini
	dibuat untuk meredirect halaman dari controller welcome sebagai controller authentikasi
	tujuannya agar redirect akan dilakukan sesuai dengan group_id dari user
	and others objectives is to make the code ini c.welcome become tidy :)





*/




class Redirection extends MX_Controller
{
	
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	function index()
	{
		
		$base_url  = $this->config->item('base_url');

		redirect($base_url.'sekolah.php/pengelola_web_sekolah/login_pertama');
					
	
	
	
	}
	
	
	function form_daftar_ulang() 
	{
	$this->load->model('M_profile');
	$username = $this->session->userdata('nim');
	$password = $this->session->userdata('password');
					if ($this->M_profile->login($username,$password,"group_id") == "1") {// jump to form daftar ulang mahasiswa
						redirect('/Welcome/belum_register_ulang');  // belum daftar ulang
					}
					elseif ($this->M_profile->login($username,$password,"group_id") == "2") {// jump to form daftar ulang dosen
						echo "daftar ulang dosen..." ; // belum daftar ulang
					}
					elseif ($this->M_profile->login($username,$password,"group_id") == "3") {// jump to form daftar ulang staf
						echo "daftar ulang staf..." ; // belum daftar ulang
					}	
					elseif ($this->M_profile->login($username,$password,"group_id") == "4") {// jump to form daftar ulang editor
						//bikin session buat tank authentikasi 
						
						 redirect('/welcome/add_user/');
					}
					elseif ($this->M_profile->login($username,$password,"group_id") == "5") {// jump to form daftar ulang admin
						echo "daftar ulang admin..." ; // belum daftar ulang
					}
					elseif ($this->M_profile->login($username,$password,"group_id") == "6") {// jump to form daftar ulang super admin
						echo "daftar ulang super admin...";  // belum daftar ulang
					}
	
	
	
	function error2 ()
	{
	$data['quote'] = $this->M_profile->random_quote();
	$this->load->view('user/V_downloadable_content', $data);
	
	}
	
	
	
	
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
?>