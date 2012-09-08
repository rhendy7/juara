<?php

class M_g_admin extends CI_Model {

	function insert_kordinat($form_data,$sekolah_id=FALSE)
	{
		//cari dulu ada ga id segitu klo ada update
		$sql = "SELECT * FROM sekolah_kordinat WHERE sekolah_id = '$sekolah_id'";
		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{	//sudah pernah diinsert
			return TRUE;
		}
		else
		{		
			$this->db->insert('sekolah_kordinat', $form_data);
				if ($this->db->affected_rows() == '1')
				{
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