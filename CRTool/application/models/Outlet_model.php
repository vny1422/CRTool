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

	function sales_Out($id)
	{
		$this->db->select('OutletID, COUNT(*) AS TotalRecords');
		$this->db->where('CreateUserID',$id);
		$this->db->group_by('OutletID');
		return $this->db->get('dbo.tSNRegistration')->result();
	}

	function achievement($id)
	{
		$query = $this->db->query('SELECT DATEPART(Year, PostDate) Year,DATEPART(Month, PostDate) Month, DateName( month ,  DateAdd(month,(DATEPART(Month, PostDate)),0) -1) MonthName, SUM(SalesInPrice) TotalAmount
FROM dbo.tSNRegistration
WHERE DATEDIFF(month, PostDate, GETDATE()) < 60 and DATEPART(Month, PostDate) = 5 and CreateUserID = '.$id.'
GROUP BY DATEPART(Year, PostDate), DATEPART(Month, PostDate)
ORDER BY Year, Month
');
		return $query->result();
	}

	function count_approve($month,$year)
	{
		$this->db->select('COUNT(*) AS TotalRecords');
		$this->db->where('DATEPART(Month, PostDate) =',$month);
		$this->db->where('DATEPART(Year, PostDate) = ',$year);
		$this->db->where('IsReturn',0);
		return $this->db->get('dbo.tSNRegistration')->row();
	}

	function count_return($month,$year)
	{
		$this->db->select('COUNT(*) AS TotalRecords');
		$this->db->where('DATEPART(Month, PostDate) =',$month);
		$this->db->where('DATEPART(Year, PostDate) =',$year);
		$this->db->where('IsReturn',1);
		return $this->db->get('dbo.tSNRegistration')->row();
	}
    
    function insertStore($data){
        if($this->db->insert('dbo.mOutlet', $data)){
            return true;
        }
        else{
            return false;
        }
    }

}
?>
