<?php
class UserModelcrm  extends CI_Model
{

  

  public function __construct() 
  {
		
  }


  public function allUsers() 
  {     
    $query = "user_type = '2' OR user_type = '1'";
    $res= $this->db->select('*')->get_where('mi_customer', $query);   // select Employee or agents And Admins
    $out = $res->result();
    return $out; 
           
  }
    
    
  public function user($uid)
  {        
        $res= $this->db->select('*')->get_where('mi_customer', array('id ' => $uid));
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
         $this->db->update('mi_customer', $data);

         return 'OK';

  }
    
    
  public function userinsert($arr,$pass)
  {      
      
     $data=array(
         'password'=>$pass,
         'user_type'=>$arr['position'],
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
      
      $newid = $this->db->insert('mi_customer', $data);
      return $newid;
  }
    
    
  public function savePassword($clientid,$newpw)
  {   
    
      $data=array('cpass'=>$newpw);
      $this->db->where('clientID', $clientid);
      $this->db->update('mi_customer', $data);
      
  }
    
    
  public function userdel($id)
  {   
      $result= $this->db->delete('mi_customer', array('id ' => $id));
      return "deleted";
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
