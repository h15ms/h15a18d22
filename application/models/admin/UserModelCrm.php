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
    
    
  public function userupdate($arr)
  {        

        $data=array(
         'position'=>$arr['position'],
         'firstname'=>$arr['firstname'],
         'lastname'=>$arr['lastname'],
         'city'=>$arr['city'],
         'zip'=>$arr['zip'],
         'street'=>$arr['street'],
         'email'=>$arr['email'],
         'telephone'=>$arr['telephone'],
         'mobile'=>$arr['mobile']
         ); 
         
         $this->db->where('id', $arr['id']);
         $this->db->update('mi_customer', $data);

         return 'OK';

  }
    
    
  public function userinsert($arr,$pass)
  {      
      
     $data=array(
         'pass'=>$pass,
         'position'=>$arr['position'],
         'firstname'=>$arr['firstname'],
         'lastname'=>$arr['lastname'],
         'city'=>$arr['city'],
         'zip'=>$arr['zip'],
         'street'=>$arr['street'],
         'email'=>$arr['email'],
         'telephone'=>$arr['telephone'],
         'mobile'=>$arr['mobile'],
         'date'=> date("d-m-Y")); 
      
      
      $this->db->insert('mi_customer', $data);
      
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
