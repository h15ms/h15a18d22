<?php
Class Login_model extends CI_Model
	{

	// Insert registration data in database

	public function check_new_user($data)
	{
		 $result = $this->db->get_where('mi_customer', array('email' => $data['email']));
		 return $result;
	}


	public function registration_insert($data)
		{

		$string = array('email' => $data['email'],'firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'password' => $data['password'], 'user_type' => $data['type_of_user'], 'phone' => $data['mobile'], 'regtime' => time() );
		$getData = $this->db->insert('mi_customer', $string);
		
		return $this->db->insert_id();
		}

	// Read data using username and password

	public function login($data)
		{
		
		$getdata=$this->db->get_where('mi_customer', array('email' => $data['email'],'password'=>$data['password']));
		$user = $getdata->result();

		if ($getdata->num_rows() != 1)
		{ 
		      $out = "1"; //user not exist
		    
		}elseif ($user[0]->password <> $data['password'])
		{ 
		      $out = "2"; //password not same
		    
		}elseif ($user[0]->status == "1")
		{ 
		     $out = "3"; // account locked
		    
		}else 
		{                
		      $out = "TRUE";
		}

		return $out;

		}

	// Read data from database to show data in admin page

	public function login_fetch($data) {

		$getdata = $this->db->select('id, username, password, firstname, lastname, zip, email, avatar, email_confirm, user_type, registration_status, status')->get_where('mi_customer', array('email' => $data));

        if ($getdata->num_rows() == 1) {
            return $getdata->result();
        } else {
            return false;
        }
    }

    public function retrieve_sess_data($inserted_id)
    {
    	return $this->db->select('*')->get_where('mi_customer', array('id' => $inserted_id));
    }

}

?>







