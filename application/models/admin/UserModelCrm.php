<?php
class UserModelcrm  extends CI_Model
{

  

  public function __construct() 
  {
		
  }


  public function allUsers() 
  {     
      
     
      $result= $this->db->select('*')->get_where('mi_admins', array('userlevel != ' => "2"));
      $nRows1 = $result->result();
      return $nRows1; 
           
  }
    
    
  public function user($uid)
  {        

        $result= $this->db->select('*')->get_where('mi_admins', array('id ' => $uid));
        $nRows1 = $result->result();
        return $nRows1; 
              
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
         $this->db->update('mi_admins', $data);

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
         'datum'=> date("d.m.Y")); 
      
      
      $this->db->insert('mi_admins', $data);
      
  }
    
    
  public function savePassword($clientid,$newpw)
  {   
    
      $data=array('cpass'=>$newpw);
      $this->db->where('clientID', $clientid);
      $this->db->update('mi_admins', $data);
      
//        $sql = "UPDATE ".PREFIX."admins SET pass = :cpass WHERE id = :clientID";        
//        $stmt = $con->prepare($sql);
//        $stmt->bindParam(':cpass', $newpw, PDO::PARAM_STR); 
//        $stmt->bindParam(':clientID', $clientid, PDO::PARAM_INT);          
//        if($stmt->execute()){
//            return 1;
//        }else{
//            return 0;
//        }   
  }
    
    
  public function userdel($arr)
  {   
      $result= $this->db->delete('mi_admins', array('id ' => $arr['userID']));
     // $nRows1 = $result->result();
        //return $nRows1; 
              
      
      
//      $sql = "DELETE FROM ".PREFIX."admins WHERE id = :userID";
//      $stmt = $this->_con->prepare($sql);
//      $stmt->bindParam(':userID', $arr['id'], PDO::PARAM_INT);   
//      $stmt->execute();
  }
    
//    
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
