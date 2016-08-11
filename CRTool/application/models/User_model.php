<?php

class User_model extends CI_Model
{
	private $table = "dbo.mUser";

	function __construct()
	{
		parent::__construct();
	}

	function sign_in($username, $password)
	{
		$this->db->where('UserID', strtolower($username));
		$this->db->where('Password', md5($password));
		
		$query = $this->db->get($this->table);
		
		if ($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
			return FALSE;
	}

?>