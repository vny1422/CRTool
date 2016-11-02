<?php

class Outlet_model extends CI_Model
{

	private $table = 'dbo.mOutlet';
	function __construct()
	{
        $this->load->database('default');

	}

	function ambil_Outlet($id)
	{
		$this->db->where('ID',$id);
		return $this->db->get($this->table)->row();
	}

}
?>
