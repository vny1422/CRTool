<?php

class CR_model extends CI_Model
{

	private $table = 'dbo.mCR';
	function __construct()
	{
        $this->load->database('default');

	}

	function list_CR()
	{

		return $this->db->get($this->table)->result();
	}

}
?>
