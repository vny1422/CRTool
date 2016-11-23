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

	function get_history($id)
	{
		$this->db->where('IDCr',$id);
		return $this->db->get('dbo.mHistory')->result();
	}

	function get_name($id)
	{
		$this->db->select('Name');
		$this->db->where('ID',$id);
		return $this->db->get($this->table)->row();
	}

	function list_warn()
	{
		$param = $this->input->post('kriteria_masalah',TRUE);
		if ($param == 'weeks')
		{
			$this->db->select('IDOutlet, COUNT(*) AS TotalRecords');
			$this->db->where('DATEDIFF(DAY, CheckInDate, DATEADD(HOUR, 8, GETDATE())) <', 8);
			$this->db->group_by('IDOutlet');
			return $this->db->get('dbo.mHistory')->result();
		}
		elseif ($param == 'months')
		{
			$this->db->select('IDOutlet, COUNT(*) AS TotalRecords');
			$this->db->where('DATEDIFF(DAY, CheckInDate, DATEADD(HOUR, 8, GETDATE())) <', 32);
			$this->db->group_by('IDOutlet');
			return $this->db->get('dbo.mHistory')->result();
		}
	}

	function ambil_target($id,$month,$year)
	{
		$this->db->select('TargetAmount');
		$this->db->where('Month =',$month);
		$this->db->where('Year =',$year);
		$this->db->where('CRID',$id);
		return $this->db->get('dbo.mCRTarget')->row();
	}

}
?>
