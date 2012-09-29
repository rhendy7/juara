<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*
*/

class M_user extends CI_Model
{
	/**
	 * Holds an array of tables used
	 *
	 * @var string
	 **/

public $user_id;

public $user;
	 
	 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
		$this->load->library('ion_auth');
		$this->user = $this->ion_auth->user()->row();

		
		
	}
	
	
	function get_user($id_user=FALSE)
	{
		if($id_user == FALSE){
			$user = $this->ion_auth->user()->row();
			$id_user = $user->user_id;
		}
		
		$sql = "SELECT ap.*,p.* FROM auth_users_pengguna ap JOIN auth_users a ON ap.user_id = a.id JOIN pengguna p ON ap.pengguna_id = p.pengguna_id WHERE user_id = $id_user LIMIT 1";
		return $this->db->query($sql)->row();
		
		
		
	}

	
	
	function get_pengguna_by_email($email)
	{	
		$sql = "SELECT * FROM pengguna WHERE email = '$email' LIMIT 1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $this->db->query($sql)->row();
			
		}
		else {		
		
			return FALSE; // cannot find it
		}
	
	
	
	
	}
	
	
	
	
	
	//get user di auth_user dari email
	function get_auth_user_by_email ($email)
	{
	
		
		$sql_auth = "SELECT * FROM auth_users WHERE email = '$email' LIMIT 1";
		$query = $this->db->query($sql_auth);
		if($query->num_rows() > 0)
		{
			return $this->db->query($sql_auth)->row();
			
		}
		else {		
		
			return FALSE; // cannot find it
		}
		
	
	}
	
	
	
	
	function simpan_pengguna($form_data)
	{
		$this->db->insert('auth_users_pengguna', $form_data);
				if ($this->db->affected_rows() == '1')
				{
					return TRUE;
				}
			
			
			
			else 
			{
				return FALSE;
			}
	
	
	
	
	}
	
	function get_user_by_email($email)
	{
		
		
		$sql = "SELECT * from pengguna WHERE email = '$email' LIMIT 1";
		$sql_auth = "SELECT email FROM auth_users WHERE email = '$email' LIMIT 1";
		$query = $this->db->query($sql_auth);
		if($query->num_rows() > 0)
		{
			return FALSE; // sudah ada di tb_auth / bukan ptm kali login
		}
		else {		
		
		return $this->db->query($sql)->row();
		}
		
		
	}
	
	function get_user_by_pengguna_id_auth_user($pengguna_id)
	{
		
		
		
		$sql_auth = "SELECT * FROM auth_users WHERE pengguna_id = '$pengguna_id' LIMIT 1";
		$query = $this->db->query($sql_auth);
		if($query->num_rows() > 0)
		{
			return $this->db->query($sql_auth)->row();// sudah ada di tb_auth / bukan ptm kali login
		}
		else {		
		
			return FALSE; 
		}
		
		
	}
	
	
	
	function get_sekolah_by_id($sekolah_id)
	{
		
		
		$sql = "SELECT * from sekolah WHERE sekolah_id = '$sekolah_id' LIMIT 1";
		
		$query = $this->db->query($sql);
		if($query->num_rows() == 0)
		{
			return FALSE; 
		}
		else {		
		
		return $this->db->query($sql)->row();
		}
		
		
	}
	
	
	
	
	public function cek_user($id_user)
	{
	   $n =  $this->get_user($id_user);

	    return $n->username;
	}
	
	
	
	
	
	
	
	function get_pengguna_id_by_user_id($id=FALSE)
	{
		//if no id was passed use the current users id
		$id || $id = $this->session->userdata('UserId');
		
		$sql = "SELECT pengguna_id FROM `auth_users_pengguna` WHERE user_id =$id";

		return $this->db->query($sql)->row();
		
	
	}
	
	function get_sekolah_by_pengguna_id($pengguna_id)
	{
		
		
		$sql = "SELECT sekolah_id FROM `pengguna` WHERE pengguna_id = '$pengguna_id'";
	
		return $this->db->query($sql)->row();
	}
	
	
	function get_sekolah_by_sekolah_id($sekolah_id=False)
	{
	
		//if no id was passed use the current users id
		$sekolah_id || $sekolah_id = $this->session->userdata('SekolahId');
		$sql = "SELECT * FROM `sekolah` WHERE sekolah_id = '$sekolah_id'";
	
		return $this->db->query($sql)->row();
	
	
	}
	
	
}
