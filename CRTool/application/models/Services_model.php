<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_model extends CI_Model {
	public function __construct()
    {
        $this->load->database('default');
    }

    function getUser($username, $password)
    {
        $result = $this->db->get_where('dbo.exUser', array('userid' => $username, 'password' => $password))->result();

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getOutlet($id = NULL, $lat = NULL, $lon = NULL) {
    	if($id === NULL || $id == 0)
    	{
            if($lat != NULL && $lon != NULL)
            {
                $result = $this->db->query("WITH GreatCircleDistance AS
                (
                    SELECT ID, Code, Name, ( 6371 * acos( cos( radians(".$lat.") ) * cos( radians( Lat ) ) 
                    * cos( radians( Lon ) - radians(".$lon.") ) + sin( radians(".$lat.") ) * sin(radians(Lat)) ) ) AS distance
                    FROM dbo.exOutlet
                )
                SELECT ID, Code, Name
                FROM GreatCircleDistance
                WHERE distance < 0.5")->result();
            }
            else
            {
                //$result = $this->db->query("select * from dbo.mOutlet")->result();
                $result = $this->db->get('dbo.exOutlet')->result();
            }
    	}
        else
        {
        	$result = $this->db->get_where('dbo.exOutlet', array('ID' => $id))->result();
        }

        return $result;
    }

    function postSN($data) 
    {
        if($this->db->insert('extSN', $data))
        {
            return true;
        }
    }

}