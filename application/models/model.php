<?php

class model extends CI_Model {

	public function read_data($place)
	{
		$que = $this->db->query("select * from $place ");
		return $que->result(); 
	}
    public function selectbydate()
	{
		$this->db->query("select * from place order by date asc");
	}
	public function login($email,$password)
    {
        $que = $this->db->query("select * from membre where email='$email' and password='$password'");
        return $que->num_rows();
    }

    public function read_data2($email,$password)
    {
        $que = $this->db->query("select * from membre where email='$email' and password='$password'");
        return $que->result();  
    }
  
    public function get_users($query)
    {  
        return $query->result();
    }
    
    function deleterecords($id)
  {
    $this->db->query("delete from membre where id_membre ='$id'  ");
    return true;
  }
	
}