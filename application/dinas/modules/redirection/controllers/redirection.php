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

		redirect($base_url.'sekolah.php/register/login_pertama');
					
	
	
	
	}
	
	
	
	//redirect to specific page
	function cek_group()
	{
		$user_group = $this->ion_auth->get_user_group();
		$group = $user_group->name;
		$base_url  = $this->config->item('base_url');
		
		
		$this->load->library('session');
		//simpan user data
		$this->load->model('M_user');
		
		$pengguna = $this->M_user->get_pengguna_id_by_user_id();
		$sekolah = $this->M_user->get_sekolah_by_pengguna_id($pengguna->pengguna_id);
		
		
		
		$newdata = array(
                    'PenggunaId'  => $pengguna->pengguna_id,
                    'SekolahId'     => $sekolah->sekolah_id,
                    
                );

		$this->session->set_userdata($newdata);
		
		
		
		if($group == "admin"){
			redirect('admin');
		
		}
		elseif($group == "kepala_dinas")
		{
			echo "go to kepala dinas page";
			
		}
		elseif($group == "admin_sekolah")
		{
				redirect($base_url.'sekolah.php/pengelola');
					
			
		}
		elseif($group == "kepala_sekolah")
		{
			echo "go to kepala sekolah";
			
		}
		elseif($group == "guru")
		{
			echo "go to kepala akun guru";
			
		}
		elseif($group == "orang_tua_siswa")
		{
			echo "go to ortu siswa page";
			
		}
	
	
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