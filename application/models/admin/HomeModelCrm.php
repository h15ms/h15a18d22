<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class HomeModelCrm extends CI_Model 
{
    
  public function countNewApplys() 
  { 
     
    $user = $this->session['user_level'];

    if($user == '0'){
      $result = $this->db->select('id')->get_where(PR.'apply', array('status' => "0")); // developer
    }elseif($user == '1'){
      $result = $this->db->select('id')->get_where(PR.'apply', array('status' => "0")); // admin
    }elseif($user == '2'){
      $result = $this->db->select('id')->get_where(PR.'apply', array('status' => "0")); // agent
    }elseif($user == '3'){
      $result = $this->db->select('id')->get_where(PR.'apply', array('status' => "0")); // member
    }elseif($user == '4'){
      $result = $this->db->select('id')->get_where(PR.'apply', array('status' => "0")); // customer
    }

        if ($result->num_rows() >= 0) {
            return $result->num_rows();
        } else {
            return false;
        }        
    }
  
    
  public function countApplys() 
  {   
    $nRows = $this->db->select('id')->from(PR.'apply')->get();
    $nRows1 = $nRows->num_rows(); 
    return $nRows1;    
  }
    
    
  public function allNewApplys()
  {      
      $this->db->order_by('id');
      $nRows = $this->db->select('*')->get_where(PR.'apply', array('status' => "0"));
      $nRows1 = $nRows->result();
      return $nRows1;
  }
    
    
  public function allUpdatedApplys()
  {      
      $this->db->order_by('id');
        $nRows = $this->db->select('*')->get_where(PR.'apply', array('app_update != ' => "0"));
        $nRows1 = $nRows->result();
      return $nRows1;        
  }

  public function editProfile($id) 
  { 
     $result = $this->db->select('*')->get_where(PR.'customer', array('id' => $id ));
      return $result->result();
  }
    
  public function editProfileAction($data) 
  { 
    print_r($data);
    exit;
     $result = $this->db->select('*')->get_where(PR.'customer', array('id' => $id ));
      return $result->result();
  }
    
    
    # ORDER BY update DESC LIMIT 10
 
}
