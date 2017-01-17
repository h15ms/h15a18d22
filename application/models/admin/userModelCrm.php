<?php
class userModelCrm  extends CI_Model
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
    
    
//  public function user($uid)
//  {              
//        $pro = $this->_con->query('SELECT * from '.PREFIX.'admins WHERE id = "'.$uid.'" LIMIT 1 ')->fetch(PDO::FETCH_ASSOC);  
//        return $pro;       
//  }
//    
//    
//  public function userupdate($arr)
//  {        
//        $sql = "UPDATE ".PREFIX."admins SET 
//            position    = :cposition, 
//            vorname     = :cvorname, 
//            nachname    = :cnachname,             
//            strasse     = :cstrasse,            
//            plz         = :cplz,  
//            stadt       = :cstadt,
//            email       = :cemail,
//            telefon     = :ctelefon,
//            mobil       = :cmobil
//            WHERE id    = :userID";        
//        $stmt = $this->_con->prepare($sql);                                  
//        $stmt->bindParam(':cposition', $arr['position'], PDO::PARAM_STR);  
//        $stmt->bindParam(':cvorname', $arr['vorname'], PDO::PARAM_STR); 
//        $stmt->bindParam(':cnachname', $arr['nachname'], PDO::PARAM_STR);
//        $stmt->bindParam(':cstrasse', $arr['strasse'], PDO::PARAM_STR);        
//        $stmt->bindParam(':cplz', $arr['plz'], PDO::PARAM_STR); 
//        $stmt->bindParam(':cstadt', $arr['stadt'], PDO::PARAM_STR);   
//        $stmt->bindParam(':cemail', $arr['email'], PDO::PARAM_STR);   
//        $stmt->bindParam(':ctelefon', $arr['telefon'], PDO::PARAM_STR);   
//        $stmt->bindParam(':cmobil', $arr['mobil'], PDO::PARAM_STR);    
//        $stmt->bindParam(':userID', $arr['id'], PDO::PARAM_INT);   
//        $stmt->execute();        
//  }
//    
//    
//  public function userinsert($arr,$pass)
//  {        
//       $sql = "INSERT INTO ".PREFIX."admins (
//            pass,
//            position,
//            vorname,
//            nachname,
//            strasse,
//            plz,
//            stadt,
//            email,
//            telefon,
//            mobil,
//            datum) VALUES (
//            :cpass,
//            :cposition,
//            :cvorname,
//            :cnachname, 
//            :cstrasse,             
//            :cplz,
//            :cstadt,
//            :cemail,
//            :ctelefon,
//            :cmobil,
//            :cdatum)";
//        $stmt = $this->_con->prepare($sql);
//        $stmt->bindParam(':cpass', $pass, PDO::PARAM_STR);
//        $stmt->bindParam(':cposition', $arr['position'], PDO::PARAM_STR);  
//        $stmt->bindParam(':cvorname', $arr['vorname'], PDO::PARAM_STR); 
//        $stmt->bindParam(':cnachname', $arr['nachname'], PDO::PARAM_STR);
//        $stmt->bindParam(':cstrasse', $arr['strasse'], PDO::PARAM_STR);        
//        $stmt->bindParam(':cplz', $arr['plz'], PDO::PARAM_STR); 
//        $stmt->bindParam(':cstadt', $arr['stadt'], PDO::PARAM_STR);   
//        $stmt->bindParam(':cemail', $arr['email'], PDO::PARAM_STR);   
//        $stmt->bindParam(':ctelefon', $arr['telefon'], PDO::PARAM_STR);   
//        $stmt->bindParam(':cmobil', $arr['mobil'], PDO::PARAM_STR);   
//        $stmt->bindParam(':cdatum', date("d.m.Y"), PDO::PARAM_STR);      
//        $stmt->execute();  
//        $newId = $this->_con->lastInsertId();
//        return $newId;
//  }
//    
//    
//  public function savePassword($clientid,$newpw)
//  {   
//        $con = new Database();
//        $con = $con->con();
//        $sql = "UPDATE ".PREFIX."admins SET pass = :cpass WHERE id = :clientID";        
//        $stmt = $con->prepare($sql);
//        $stmt->bindParam(':cpass', $newpw, PDO::PARAM_STR); 
//        $stmt->bindParam(':clientID', $clientid, PDO::PARAM_INT);          
//        if($stmt->execute()){
//            return 1;
//        }else{
//            return 0;
//        }   
//  }
//    
//    
//  public function userdel($arr)
//  {      
//      $sql = "DELETE FROM ".PREFIX."admins WHERE id = :userID";
//      $stmt = $this->_con->prepare($sql);
//      $stmt->bindParam(':userID', $arr['id'], PDO::PARAM_INT);   
//      $stmt->execute();
//  }
//    
//    
//  public function makePass()
//  {
//        $pool = "qwertzupasdfghkyxcvbnm";
//        $pool .= "0123456789";
//        srand ((double)microtime()*1000000);
//        for($index = 0; $index < 7; $index++){
//            $pass .= substr($pool,(rand()%(strlen ($pool))), 1);
//        }
//        return $pass;
//  }


}