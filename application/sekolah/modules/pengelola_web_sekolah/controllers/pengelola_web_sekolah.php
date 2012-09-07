<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengelola_web_sekolah extends MX_Controller {
	//CHANGE THIs BASED ON DATABASE USER DEFINED
	
	private $t;
	private $_template;
	private $M_admin;

	function __construct()
	{
		parent::__construct();
		
		
		
		$ci =& get_instance();
		$this->t  	= $this->config->item('template');
		$this->_template		= "templates/$this->t/";
		
		
		
		
		
		$this->load->library('ion_auth');
		$this->load->model('M_user');
		
		
		//autoload
		$this->M_admin = $this->load->model('M_g_admin');
		$this->load->library('form_validation');
		$this->lang->load('form_validation', 'indonesia');
		
		
	}

	function login_pertama()
	{
		
		
		// $this->template->set('sekolah', $this->session->userdata('id_sekolah'));
		$email = $this->session->userdata('email');
		$pengguna = $this->M_user->get_user_by_email($email);
		
		
		

		$data['sekolah'] = $this->M_user->get_sekolah_by_id($pengguna->sekolah_id);
		$data['pengguna'] = $this->M_user->get_user_by_email($email);
		
		 $this->template->set('sekolah', $data['sekolah']->nama);
		$this->template->set('title', 'Halaman pengelola web sekolah');
		$this->template->load($this->_template.'one_col', 'V_pertama_login', $data);
	
	
	
	
	}
	
	//without warning
	function form_profil_sekolah1()
	{
		$data['id_sekolah'] = $this->session->userdata('id_unit_kerja');
		$data['sekolah'] = $this->M_admin->get_sekolah_where_id($data['id_sekolah']);
		$data['status'] = $this->M_admin->get_status_sekolah();
		$data['status_mutu'] = $this->M_admin->get_status_mutu_sekolah();
		$data['tingkat_sekolah'] = $this->M_admin->get_tingkat_sekolah();
		$data['post'] = 'pengelola_web_sekolah/form_profil_sekolah';
		
		$sekolah = $data['sekolah'];
		$nama_sekolah = "$sekolah->kode_tingkat_sekolah $sekolah->nama";
		 $this->template->set('sekolah', $nama_sekolah);
		$this->template->set('title', 'Form profil sekolah');
		$this->template->load($this->_template.'one_col', 'V_form_profil_sekolah', $data);
	
	
	}
	
	
	
	function form_profil_sekolah ()
	{
		//$this->form_validation->set_rules('nama','nama','required|is_unique[g_sekolah.nama]');		--> Default
		$this->form_validation->set_rules('tingkat_sekolah','Kategori Utama','required');	
		$this->form_validation->set_rules('status','Status','required');	

		//identifikasi sekolah fieldset
		$this->form_validation->set_rules('nss','NSS','required');	
		$this->form_validation->set_rules('npsn','NPSN','required');	
		$this->form_validation->set_rules('nis','No Induk Sekolah','required');	
		$this->form_validation->set_rules('npsn','NPSN','required');	
		$this->form_validation->set_rules('sk_pendirian','SK Pendirian Sekolah','required');	
		
		//alamat
		$this->form_validation->set_rules('jalan','Jalan','required');	
		$this->form_validation->set_rules('kelurahan','Kelurahan','required');	
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');	
		$this->form_validation->set_rules('kab_kota','Kabupaten/kota','required');	
		$this->form_validation->set_rules('kodepos','Kode Pos','required');	
		
		//mapping
		 //latitude
			$this->form_validation->set_rules('lat_degrees','Latitude Degrees','required|is_natural|less_than[91]');	
			$this->form_validation->set_rules('lat_minutes','Latitude Minutes','required|is_natural|less_than[60]');
			$this->form_validation->set_rules('lat_second','Latitude Second','required|is_natural|less_than[60]');	
			$this->form_validation->set_rules('radio_latitude','North/South Radio','required');	
			
		//longitude
			$this->form_validation->set_rules('long_degrees','longitude Degrees','required|is_natural|less_than[181]');	
			$this->form_validation->set_rules('long_minutes','longitude Minutes','required|is_natural|less_than[60]');
			$this->form_validation->set_rules('long_second','longitude Second','required|is_natural|less_than[60]');	
			$this->form_validation->set_rules('radio_longitude','West/East Radio','required');	
		
		//kontak sekolah
		$this->form_validation->set_rules('telp','Telpon 1','is_natural');	
		$this->form_validation->set_rules('telp2','Telpon 2','is_natural');
		$this->form_validation->set_rules('fax','Faximile','is_natural');		
		$this->form_validation->set_rules('email','email','valid_email');	
		
		
		
		//private var
		$id_sekolah = $this->session->userdata('id_sekolah');
		//$isbn = preg_replace("/[^0-9\s]/", "", $string);
		
		
		
	
		if ($this->form_validation->run() == TRUE) // validation has been passed
		{
		
			$latitude = ''.$this->input->post('lat_degrees').'-'.$this->input->post('lat_minutes').'-'.$this->input->post('lat_second').'-'.$this->input->post('radio_latitude').'';
			
			$longitude = ''.$this->input->post('long_degrees').'-'.$this->input->post('long_minutes').'-'.$this->input->post('long_second').'-'.$this->input->post('radio_longitude').'';
		
		
		
			// build array for the model
			$form_data = array(
							'nama' => $this->input->post('nama'),
							'id_tingkat_sekolah' => $this->input->post('tingkat_sekolah'),
							'id_status' => set_value('status'),
							
							//identifikasi sekolah
							'nss' => set_value('nss'),
							'npsn' => set_value('npsn'),
							'nis' => $_POST['nis'],
							'sk_pendirian' => set_value('sk_pendirian'),
							
							//alamat
							'jalan' => set_value('jalan'),
							'kelurahan' => set_value('kelurahan'),
							'kecamatan' => set_value('kecamatan'),
							'kab_kota' => set_value('kab_kota'),
							'kodepos' => set_value('kodepos'),
							
							//latitude vs langitude
							'latitude' => $latitude,
							'longitude' => $longitude,
							
							//kontak
							'telp' => set_value('telp'),
							'telp2' => set_value ('telp2'),
							'email' => set_value ('email'),
							'fax' => set_value ('fax'),

						);
		
		
			if($this->M_admin->update_profile_sekolah($id_sekolah,$form_data) == TRUE)
			{
				echo " insert me";
			
			
			}
			
			
				
		}
		else 					//bad validation
		{
	
	
		
		$data['id_sekolah'] = $this->session->userdata('id_sekolah');
		$data['sekolah'] = $this->M_admin->get_sekolah_where_id($data['id_sekolah']);
		$data['status'] = $this->M_admin->get_status_sekolah();
		$data['tingkat_sekolah'] = $this->M_admin->get_tingkat_sekolah();
		
		
		
		
		$data['post'] = 'pengelola_web_sekolah/form_profil_sekolah';
		
		$sekolah = $data['sekolah'];
		$nama_sekolah = "$sekolah->kode_tingkat_sekolah $sekolah->nama";
		 $this->template->set('sekolah', $nama_sekolah);
		$this->template->set('title', 'Form profil sekolah');
		$this->template->load($this->_template.'one_col', 'V_form_profil_sekolah', $data);
		
		}
	
	
	
	
	
	
	}
	
	
	//without warning
	function form_staf_detail1()
	{
		$data['id_sekolah'] = $this->session->userdata('id_sekolah');
		$data['sekolah'] = $this->M_admin->get_sekolah_where_id($data['id_sekolah']);
		$data['pengelola'] = $this->M_admin->get_pengelola_sekolah($data['id_sekolah']);
		$data['status'] = $this->M_admin->get_status_sekolah();
		$data['tingkat_sekolah'] = $this->M_admin->get_tingkat_sekolah();
		$data['jabatan'] = $this->M_admin->get_jabatan();
		$data['golongan'] = $this->M_admin->get_golongan();
		$data['tingkat_pendidikan'] = $this->M_admin->get_tingkat_pendidikan();
		
		
		$data['post'] = 'pengelola_web_sekolah/form_staf_detail';
		
		$sekolah = $data['sekolah'];
		
		$nama_sekolah = "$sekolah->kode_tingkat_sekolah $sekolah->nama";
		 $this->template->set('sekolah', $nama_sekolah);
		$this->template->set('title', 'Form profil pengelola');
		$this->template->load($this->_template.'one_col', 'V_form_staf_detail', $data);
	
	
	}
	
	
	
	 function index()
	{
		
		$this->template->set('title', 'Halaman Admin');
		$this->template->load($this->_template.'two_col', 'V_admin');
		
        
              
               
                
	}
	
	
	function tambah_sekolah()
	{
	
		$this->form_validation->set_rules('tingkat_sekolah','Kategori Utama','required');	
		$this->form_validation->set_rules('nama','nama','required|is_unique[g_sekolah.nama]');			
		$this->form_validation->set_rules('no_induk','no_induk ','required');		
		$this->form_validation->set_message('required', 'Harus diisi');
		$this->form_validation->set_error_delimiters('<span class="input_error">', '</span>');
		
		if ($this->form_validation->run() == TRUE) // validation has been passed
		{
		
			// build array for the model
			$form_data = array(
							'id_tingkat_sekolah' => $this->input->post('tingkat_sekolah'),
					       	'nama' => $this->input->post('nama'),
					       	'nis' =>$this->input->post('no_induk'),

						);
		
		
			if($this->M_admin->save_form('g_sekolah',$form_data) == TRUE)
			{
				echo " insert me";
			
			
			}
			
			
				
		}
		else 					//bad validation
		{
	
	
		$data['tingkat_sekolah'] = $this->M_admin->get_tingkat_sekolah(); 
	
		$this->template->set('title', 'Tambah Sekolah');
		$this->template->load($this->_template.'two_col', 'V_tambah_sekolah',$data);
		
		}
	
	
	
	}
	
	function insert_staf_tingkat_pendidikan()
	{
		if($this->input->post('nama') == "") {
			echo "Nama Lembaga Pendidikan harus diisi";
		}
		elseif($this->input->post('tingkat_pendidikan') == 1) {
			echo "<div class='error_msg'> <p>Tingkat Pendidikan mohon diisi</p> </div>";
		}
		elseif($this->input->post('tahun_lulus') == 0) {
			echo "Tahun pendidikan harus diisi"; 
		}
		else
		{
			echo "success";
		
		
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