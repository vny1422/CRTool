<?php

class User_model extends CI_Model
{

	function __construct()
	{
		$this->load->database('default');
	}

	function Sign_in($username, $password)
	{
        $result = $this->db->get_where('dbo.mUser', array('UserID' => $username, 'Password' => $password))->row();
        if ($result)
            return $result;
        else
            return FALSE;
	}
}

?>
