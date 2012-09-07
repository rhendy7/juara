<?php

class M_latest_news extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	

	//get latest news limit 3
	//default kategori = 1 => berita
	function get_news($id_unit_kerja=FALSE,$id_kategori=1,$limit=3)
	{
		
		
		$this->db->select('*');
		$this->db->where('id_unit_kerja',$id_unit_kerja);
		$this->db->where('id_kategori',$id_kategori);
		$this->db->limit($limit);
		$this->db->order_by('tanggal_input', 'DESC');
		
		return $this->db->get('b_berita');
	
	}
	
	
	
	
	function get_kategory()
	{
	
		return $this->db->get('b_kategori_berita');
	
	}
	
	
	
function get_kategory_by_unit_kerja($id_unit_kerja)
	{
		$this->db->where('id_unit_kerja',$id_unit_kerja);
		return $this->get_kategory();
	
	}
	
	
	function get_status_sekolah()
	{
	
		return $this->db->get('g_unit_kerja_sekolah_status');
	}
	
	function tambah_sekolah($form_data)
	{
		$this->db->trans_begin();
		
			$data_unit_kerja =  array('nama' => $form_data['nama'], 'id_jenis_unit_kerja' => $form_data['jenis_unit_kerja']);

			$this->db->insert('g_unit_kerja', $data_unit_kerja);
			
			//remove nama from array
			unset($form_data['nama']);
			unset($form_data['jenis_unit_kerja']);
			
			
			//HATI2... klo multi user
			$form_data['id_unit_kerja'] = $this->db->insert_id();
			
			
			$this->db->insert('g_unit_kerja_sekolah', $form_data);

	    if ($this->db->trans_status() === FALSE)
	    {
		$this->db->trans_rollback();
		return FALSE;
	    }

	    $this->db->trans_commit();
	    return TRUE;
	
	
	
	}
	
	//untuk memeriksa duplikasi nama sekolah
	function cek_nama_sekolah ($nama,$tingkat) {
	
	$sql = "select gs.nama, gk.id_tingkat_sekolah from g_unit_kerja gs, g_unit_kerja_sekolah gk where gs.nama = '$nama' and gk.id_tingkat_sekolah = $tingkat";
	
	$query = $this->db->query($sql);
		if ($query->num_rows() < 1)
		{
			return TRUE;
		}
			return FALSE;
		
	
	
	
	
	}
	
	
	
	
	
	
	
	//return SINGLE objects
	function get_sekolah_where_id ($id_sekolah)
	{
		$this->db->where('guks.id',$id_sekolah);
		 
		$query = $this->get_sekolah();
		$result = $query->row();
		
		 if ($result == TRUE)
		 {
			return $result;
		 }
			return FALSE;
	}
	
	
	
	//return Multi objects
	function get_sekolah_where_tingkat_sekolah($id)
	{
		
		$this->db->where('guks.id_tingkat_sekolah',$id);
		
		
		$query =  $this->get_sekolah();
		if ($query->num_rows() > 0)
		{
			return $query;
		}
			return FALSE;
		
	
	}
	
	
	//return single objects
	function get_pengelola_sekolah($id_unit_kerja)
	{
	// SELECT * from g_staf g left JOIN auth_users a ON a.id = g.user_id WHERE a.id_sekolah = 1
		$this->db->select('*');
		$this->db->from('g_staf');
		$this->db->join('auth_users', 'auth_users.id = g_staf.user_id');
		$this->db->where('auth_users.id_unit_kerja',$id_unit_kerja);
		
		
		$query = $this->db->get();
		$result = $query->row();
		//select g.*, a.* from auth_users a, g_staf g where a.id = g.user_id and a.id_sekolah = 1
		 if ($result == TRUE)
		 {
			return $result;
		 }
			return FALSE;
		
	
	
	
	}
	
	
	
	// function get_sekolah_where_tingkat_sekolah($id)
	// {
		// $this->db->select('g_sekolah.*');
		// $this->db->select('g_staf.nama AS pengelola');
		// $this->db->select ('auth_users.email as user_email, auth_users.id as user_id');
		// $this->db->from('g_sekolah');
		// $this->db->join('auth_users', 'auth_users.id_sekolah = g_sekolah.id');
		// $this->db->join('g_staf', 'g_staf.user_id = auth_users.id');
		// $this->db->where('id_tingkat_sekolah',$id);
		
		// $query =  $this->db->get();
		// if ($query->num_rows() > 0)
		// {
			// return $query;
		// }
			// return FALSE;
		
	
	// }



	// --------------------------------------------------------------------

      /** 
       * function save_form()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
       */

	
	//simpan semua form data
	function save_form($table,$form_data)
	{

		
	
		$this->db->insert($table, $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	
	
	//below is just example from perpustakaan model_admin
	
	
	
	function cek($kode,$data) 
	{
		$this->db->select($kode);
		$this->db->where($kode,$data);
		$query = $this->db->get('category');
		
		if ($query->num_rows() > 0)
		{
			return TRUE;
		}
			return FALSE;
	}
	
	
	 function getAll()
	 {
	// $this->db->select($kode);
		
		$this->db->order_by('id');
		return $this->db->get('category');
	}
	
	
	function hapus($id_kat) 
	{
	
		$this->db->where('id',$id_kat);
		$this->db->delete('category');
		if ($this->db->affected_rows() <='1')
		{
			return TRUE;
		}
		
		return FALSE;
	}	
	
	
	
	
	
	function update ($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('category', $data);
		if ($this->db->affected_rows() <='1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	
	function twin($id,$kode,$parent) 
	{
		$this->db->where('kode',$kode);
		$query = $this->db->get('category');
		
		foreach ($query->result() as $row)
		{
			if($row->id==$id)
			{
			return False;
			}
			return true;
		}
	}
	
	
	 function getAllCat()
	 {
	// $this->db->select($kode);
		$this->db->order_by('kode', 'asc');
		return $this->db->get('category');
	}
	
	
		
	 function getAll_not_parent()
	 {
	// $this->db->select($kode);
		$this->db->order_by('id');
		$this->db->where('parent_id <>','0');
		return $this->db->get('category');
	}
	
	 function getAll_parents()
	{
	// $this->db->select($kode);
		
		$this->db->order_by('id');
		$this->db->where('parent_id','0');
		$query = $this->db->get('category');
	
		return $query;
	}
	
	function get_category () 
	{
	
		 return $this->db->get('category');
	
	}
	
	function get_buku () 
	{
	
		 return $this->db->get('buku');
	
	}
	
	function get_parents()
	{
		$this->db->order_by('id');
		$this->db->where('parent_id', '0 OR NULL');
		return $this->get_category();
	}
	
	
	
	function get_parent_by_name ($name)
	{
		$this->db->order_by('id');
		$this->db->where('nama', $name);
		return $this->get_category();
	}
	
	function get_category_by_id ($category_id)
	{
	
		$this->db->where('id', $category_id);
		return $this->get_category();
	}
	
	function get_parent_by_child_id($child_id)
	{
		$n = $this->get_category_by_id ($child_id);
		
		$row = $n->row(); 
		return $this->get_category_by_id ($row->parent_id);
		
		
		
		
		
	
	}
	
	
	
	 function get_child_by_parent_id($parent_id)
	 {
	// $this->db->select($kode);
		
		$this->db->order_by('id');
		$this->db->where('parent_id', $parent_id);
		return $this->get_category();
	}
	
	 function get_child_by_parent_id_not_admin($parent_id)  //apabila yang mengakses bukan admin
	 {
	// $this->db->select($kode);
		
		$this->db->order_by('id');
		$this->db->where('parent_id', $parent_id);
		$this->db->where('bisa_dipinjam', '1');
		return $this->get_category();
	}
	
	
	
	 function get_child_by_parent_name($parent_name)
	 {
	// $this->db->select($kode);
		
		$this->db->order_by('id');
		$this->db->where('nama', $parent_name);
		$query = $this->get_category();
		
		$cat = $query->row();
		
		return $this->get_child_by_parent_id($cat->id);
	}
	
	
	function get_parent_by_buku_id($id)
	{
		$this->db->where('id',$id);
		$buku = $this->get_buku();
	
		$row = $buku->row(); 
		
		$n = $this->get_category_by_id ($row->kategori);
		$sn = $n->row(); 
		
		return $this->get_category_by_id($sn->parent_id);
		
	}
	
	function sum_buku_by_category_id ($category_id) {  //menghitung jumlah buku perkategory
		
	$sql = "SELECT c.id, c.kode,  c.nama, c.catatan, COUNT(*) AS hitung  FROM category AS c, buku as b  WHERE c.id = b.kategori AND c.parent_id = '$category_id' GROUP BY c.nama ORDER BY c.kode";
	
	return $this->db->query($sql);
	
	
	}
	

	
}
?>