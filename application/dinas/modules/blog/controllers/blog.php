<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {
	//CHANGE THIs BASED ON DATABASE USER DEFINED
	
	private $t;
	private $_template;
	private $M_admin;
	private $unit_kerja;

	function __construct()
	{
		parent::__construct();
		
		$this->unit_kerja = $this->tank_auth->get_id_unit_kerja();
		
		
		$ci =& get_instance();
		$this->t  	= $this->config->item('admin_template');
		$this->_template		= "templates/$this->t/";
		
		
		$this->load->library('form_validation');
		
		
		
		//autoload
		$this->M_admin = $this->load->model('M_blog');
		$this->load->library('form_validation');
		
	}

	 function index()
	{
		    
               
                
	}
	
	 function tambah_berita()
	{
		
			
			 $this->form_validation->set_rules('kategori', 'Kategori', 'required');
			 $this->form_validation->set_rules('judul', 'judul', 'required');
			 $this->form_validation->set_rules('isi', 'Isi berita', 'required');
			
			 $this->form_validation->set_error_delimiters('<div id="warning" class="info_div"><span class="ico_error">', '</span></div>');
			 
			 
			 
			 
			 
			 
				if(isset($_POST['kategori'])) {
					$data['kode_kat'] = $this->input->post('kategori');
				}
				else 
				{
					$data['kode_kat'] = 0;
							
				}
		
			
			if ($this->form_validation->run() == FALSE)
			{
				$kata_kunci = $this->input->post('kata_kunci');
			
				if($kata_kunci == "Kata kunci...") {
				
					$kata_kunci = '';
				}
				
				//get Unit kerja ID
					
					$data['kategori'] = $this->M_blog->get_kategory_by_unit_kerja($this->unit_kerja); 
								
					$this->template->set('title', 'Form Tambah Berita');
					$this->template->load($this->_template.'one_col', 'V_tambah_berita',$data);
			}
			else
			{
				//save last backup history
								$form_data = array(
											'id_kategori' => $this->input->post('kategori'),
											'judul' => $this->input->post('judul'),
											'isi' => $this->input->post('isi'),
											'id_user' => $this->session->userdata('user_id'),
											'id_unit_kerja' => $this->tank_auth->get_id_unit_kerja(),
																		
											);		
									
									//excute insert saldo denda bulan 
									if($this->M_blog->tambah_berita($form_data)==TRUE)
									{
										$this->session->set_flashdata('div', 'success');
										$this->session->set_flashdata('msg', '<span class="ico_success">Berita baru berhasil disimpan</span>');
										redirect('admin');
									}
				
						
				
				
				
			}
			
				
				
     
              
               
                
	}
	
	
	
	function daftar_berita()
	{
		
		// if(! isset($_POST['kategori'])){
			 $id_kategori = 1;
		// }
		// else {
			// $id_kategori = $_POST['kategori'];
		// }
		
		
		
		$this->db->from('b_berita');
		$this->db->where('id_kategori', $id_kategori); //change 1 to what ever
		$count_row=$this->db->count_all_results();
		
		
		
		
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/blog/daftar_berita/';
		$config['total_rows'] = $count_row;
		$config['per_page'] = '10';
		
		$config['cur_tag_open'] = '<span id="current">';
		$config['cur_tag_close'] = '</span>';
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
			
			
		$data['list'] = $this->M_blog->get_news_pagination($this->unit_kerja,$id_kategori,$this->uri->segment(3),$config['per_page'] );
		$data['kategori'] = $this->M_blog->get_kategory_by_unit_kerja($this->unit_kerja); 
		//first load is berita category
		$data['kode_kat'] = $id_kategori;
								
		$this->template->set('title', 'Daftar Berita');
		$this->template->load($this->_template.'one_col', 'V_daftar_berita',$data);
		
		
	
	}
	
	
	
	function daftar_berita_ajax()
	{
		
		if(! isset($_POST['kategori'])){
			$id_kategori = 1;
		}
		else {
			$id_kategori = $_POST['kategori'];
		}
		
		
		
		$this->db->from('b_berita');
		$this->db->where('id_kategori', $id_kategori); //change 1 to what ever
		$count_row=$this->db->count_all_results();
		
		
		
		
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/blog/daftar_berita/';
		$config['total_rows'] = $count_row;
		$config['per_page'] = '10';
		
		$config['cur_tag_open'] = '<span id="current">';
		$config['cur_tag_close'] = '</span>';
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
			
			
		$data['list'] = $this->M_blog->get_news_pagination($this->unit_kerja,$id_kategori,$this->uri->segment(3),$config['per_page'] );
		$data['kategori'] = $this->M_blog->get_kategory_by_unit_kerja($this->unit_kerja); 
		//first load is berita category
		$data['kode_kat'] = $id_kategori;
								
		$this->template->set('title', 'Daftar Berita');
		$this->template->load($this->_template.'one_col', 'V_daftar_berita_ajax',$data);
		
		
	
	}
	
	// ----------------- Blog ---------------
	function tambah_kategori()
	{
		$data['list'] = $this->M_blog->get_kategory_by_unit_kerja(); 
		
		$data['status'] = $this->M_admin->get_status_sekolah();
		$data['msg'] = "";
		$this->template->set('title', 'Form Kategori');
		$this->template->load($this->_template.'two_col', 'V_tambah_sekolah',$data);
	
	
	
	
	}
	
	
	public function text_cek($str,$match)
	{
		if ($str == $match)
		{
			$this->form_validation->text_cek('username_check', 'Mohon lengkapi kolom isian');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	//------------------End Blog ---------------
	
	
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */