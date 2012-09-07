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
		$this->_template		= "templates/$this->t/";
		
		
		
		
		
		//autoload
		$this->M_admin = $this->load->model('M_g_admin');
		$this->load->model('M_user');
		$this->load->library('form_validation');
		
	}

	 function index()
	{
		
			
			
				$user = $this->ion_auth->user()->row();
				$data['user'] = $this->M_user->get_user();
				$this->template->set('title', 'Halaman Admin');
				$this->template->load($this->_template.'index', 'V_admin',$data);
				
       
              
               
                
	}
	
	
	function tambah_sekolah()
	{
	
		$this->form_validation->set_rules('tingkat_sekolah','Kategori Utama','required');	
		$this->form_validation->set_rules('nama','nama','required');			
		$this->form_validation->set_rules('no_induk','no_induk ','required');	
		$this->form_validation->set_rules('status','status ','required');	
		$this->form_validation->set_message('required', 'Harus diisi');
		$this->form_validation->set_error_delimiters('<span class="input_error">', '</span>');
		
		if ($this->form_validation->run() == TRUE) // validation has been passed
		{
		
			$nama  = $this->input->post('nama');
			$tingkat = $this->input->post('tingkat_sekolah');
			$unit_kerja = $this->input->post('unit_kerja');
			
			
			//cek duplikasi adanya nama sama tingkat sekolah yang sama dan unit kerja sama
			if($this->M_admin->cek_nama_sekolah($nama,$tingkat) == FALSE) {
				$this->form_validation->set_message('cek_nama_sekolah', 'Nama sekolah sudah diinput sebelumnya');
					
					$data['tingkat_sekolah'] = $this->M_admin->get_tingkat_sekolah(); 
					$data['status'] = $this->M_admin->get_status_sekolah();
					$data['msg'] = "<div class='error'>Nama Sekolah yang anda input sudah pernah diinput sebelumnya, Mohon Periksa Kembali</div>";
					
					$this->template->set('title', 'Tambah Sekolah');
					$this->template->load($this->_template.'two_col', 'V_tambah_sekolah',$data);
					
			
			}
			else
			{
									// build array for the model
					$form_data = array(
									'id_tingkat_sekolah' => $this->input->post('tingkat_sekolah'),
									'nama' => $this->input->post('nama'),
									'nis' =>$this->input->post('no_induk'),
									'id_status' =>$this->input->post('status'),
									'jenis_unit_kerja' => $this->input->post('unit_kerja')

									);
				
				
					if($this->M_admin->tambah_sekolah($form_data) == TRUE)
					{
						echo " insert me";
					
					
					}
			}
		
		
		
		
			
			
				
		}
		else 					//bad validation
		{
	
	
		$data['tingkat_sekolah'] = $this->M_admin->get_tingkat_sekolah(); 
		$data['status'] = $this->M_admin->get_status_sekolah();
		$data['msg'] = "";
		$this->template->set('title', 'Tambah Sekolah');
		$this->template->load($this->_template.'two_col', 'V_tambah_sekolah',$data);
		
		}
	
	
	
	}
	
	
	
	
	
	
	function list_sekolah()
	{
		$data['tingkat_sekolah'] = $this->M_admin->get_tingkat_sekolah(); 
	
		$this->template->set('title', 'List sekolah');
		$this->template->load($this->_template.'two_col', 'V_list_sekolah',$data);
		
	
		
	
	}
	
	
	
	function list_sekolah_ajax()
	{
		$id = $this->input->post('id');
		if($id != 0) {
		$data['list'] = $this->M_admin->get_sekolah_where_tingkat_sekolah($id);
		
		$this->load->view('V_list_sekolah_ajax',$data);
		}
	
	
	
	
	}
	
	
	function add_pengelola ()
	{
		$id_sekolah = $this->uri->segment(3);
		echo $id_sekolah;
	
	
	
	
	
	
	
	
	}
	
	
	
	
	
	
	
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */