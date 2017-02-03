<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class ChangepassModelCrm extends CI_Model {
    

    public function __construct()
    {
    	parent:: __Construct();
    	
    }

    public function usersData($id){

    	$getdata = $this->db->select('*')->get_where(PR.'customer', array('id' => $id));
    	$result = $getdata->result();
    	return $result;
    }

    public function setNewPass($user_id, $pass){

    	$this->db->where('id' , $user_id);
    	$getdata = $this->db->update(PR.'customer', array('password' => $pass));
    		if(isset($getdata)){
    			return "true";
    		}else{
    			return "false";
    		}
    		
    }




}
        


 ?>