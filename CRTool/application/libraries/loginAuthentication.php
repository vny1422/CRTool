<?php if(! defined('BASEPATH')) exit('DIRECT ACCESS IS NOT ALLOWED!');

class loginAuthentication{
	var $CI = NULL;

	public function __construct(){
		$this->CI =& get_instance();
	}

	public function login($username, $password){
		$query = $this->CI->db->get_where();

		if($query->num_rows() == 1){
			$row = $this->CI->db->query();
			
		}
	}


}