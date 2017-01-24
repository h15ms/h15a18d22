<?php 


class User_model extends CI_model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function user_info_edit($data , $sess)
	{
		$string = array(
			'firstname' => $data['firstname'],
			'lastname' => $data['lastname'],
			'street' => $data['street'],
			'zip' => $data['zip'],
			'city' => $data['city'],
			'state' => $data['state'],
			'country' => $data['country'],
			'email' => $data['email'],
			'phone' => $data['phone'],
			'avatar' => $data['avatar']
			);
	
		$this->db->where('id' , $sess);
			$result = $this->db->update('mi_customer', $string);

		if($result == '1'){
			return '1';
		}else{
			return '0';
		}	
	}

	public function retrieve_sess_data($user_id)
	{
		return $this->db->select('*')->get_where('mi_customer', array('id' => $user_id));
	}

}















 ?>
