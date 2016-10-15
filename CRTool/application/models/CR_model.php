<?php

class CR_model extends CI_Model
{
	

	function __construct()
	{
        $this->load->database('default');
		
	}

	function ambil_namaCR()
	{
		
		$query = $this->db->get('dbo.mCR')->result();
		
		if ($query)
		{
			return $query;
		}
		else
			return FALSE;
	}
}
?>