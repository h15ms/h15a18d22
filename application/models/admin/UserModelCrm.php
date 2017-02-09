<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModelcrm  extends CI_Model
{

  

  public function __construct() 
  {
		
  }


  public function allUsersAdmin() 
  {     
    $query = "user_type = '2' OR user_type = '1'";
    $res= $this->db->select('*')->get_where(PR.'customer', $query);   // select Employee or agents And Admins
    $out = $res->result();
    return $out; 
  }  

  public function allUsersAgent($id) 
  {     
    $res= $this->db->select('*')->get_where(PR.'customer', array('agent_id' => $id));   // select Employee of any agent OR Admin
    $out = $res->result();
    return $out;            
  }
    
    
  public function user($uid)
  {        
    
    $res= $this->db->select('*')->get_where(PR.'customer', array('id ' => $uid));
    $out = $res->result();
    return $out; 
  }  
    
    
  public function userUpdate($arr)
  {  

    $data=array(
     'user_type'=>$arr['user_level'],
     'firstname'=>$arr['firstname'],
     'lastname'=>$arr['lastname'],
     'city'=>$arr['city'],
     'zip'=>$arr['zip'],
     'street'=>$arr['street'],
     'state'=>$arr['state'],
     'country'=>$arr['country'],
     'email'=>$arr['email'],
     'phone'=>$arr['phone']
     ); 
     
     $this->db->where('id', $arr['id']);
     $this->db->update(PR.'customer', $data);

     return 'OK';

  }
    
    
  public function userinsert($arr,$pass)
  {      

     $data=array(
         'password'=>$pass,
         'agent_id'=> $this->session['user_id'],
         'user_type'=>$arr['user_level'],
         'firstname'=>$arr['firstname'],
         'lastname'=>$arr['lastname'],
         'city'=>$arr['city'],
         'zip'=>$arr['zip'],
         'street'=>$arr['street'],
         'state'=>$arr['state'],
         'country'=>$arr['country'],
         'email'=>$arr['email'],
         'phone'=>$arr['phone'],
         'regtime'=> time()); 
      
      $newid = $this->db->insert(PR.'customer', $data);
      return $newid;
  }

  public function userexistcheck($email)
  {        
        $res= $this->db->select('*')->get_where(PR.'customer', array('email' => $email));
        $out = $res->num_rows();
        return $out; 
  }  

  public function allEmployee($id)
  {        
        $res= $this->db->query('SELECT * FROM `'.PR.'customer` c inner join '.PR.'apply a ON a.user_id = c.id where c.id = '.$id.' or c.agent_id = '.$id);
        $out = $res->result();
        return $out; 
  }  

  public function employee($id)
  {        
        $res= $this->db->select('*')->get_where(PR.'customer', array('agent_id' => $id));
        $out = $res->result();
        return $out; 
  }
    
  public function savePassword($clientid,$newpw)
  {   
    
      $data=array('cpass'=>$newpw);
      $this->db->where('clientID', $clientid);
      $this->db->update(PR.'customer', $data);
      
  }
    
    
  public function userdel($id)
  {   
      $result= $this->db->delete(PR.'customer', array('id ' => $id));
      return "deleted";
  }   

  public function userapprovelevel($id)
  {   
      $this->db->where('id' , $id);
      $out = $this->db->update(PR.'customer', array('registration_status' => '1'));
      return $out;
  }  

    
  public function makePass()
  {
        $pass='';
        $pool = "qwertzupasdfghkyxcvbnm";
        $pool .= "0123456789";
        srand ((double)microtime()*1000000);
        for($index = 0; $index < 7; $index++){
            $pass .= substr($pool,(rand()%(strlen ($pool))), 1);
        }
        return $pass;
  }


}
