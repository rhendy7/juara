<?php

class M_g_admin extends CI_Model {

	function insert_kordinat($form_data,$sekolah_id=FALSE)
	{
		//cari dulu ada ga id segitu klo ada update
		$sql = "SELECT sekolah_id FROM sekolah_kordinat WHERE sekolah_id = '$sekolah_id'";
		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{	//sudah pernah diinsert
			return TRUE;
		}
		else
		{		
			if($this->db->insert('sekolah_kordinat', $form_data) == TRUE){
				return TRUE;
			
			}
			else 
			{
				return FALSE;
			}
		}	
	
	
	
	}
	
}
?>