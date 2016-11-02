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

	function list_CR_online()
	{
		$this->db->where('DATEDIFF(HOUR, CheckInDate, DATEADD(HOUR, 8, GETDATE())) <', 6);
		return $this->db->get($this->table)->result();
	}

	function list_CR_offline()
	{
		$this->db->where('DATEDIFF(HOUR, CheckInDate, DATEADD(HOUR, 8, GETDATE())) >', 6);
		return $this->db->get($this->table)->result();
	}

}
?>
