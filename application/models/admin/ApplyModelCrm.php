<?php
class ApplyModelcrm extends CI_Model
{

  
  public function __construct() 
  {
      //  require_once 'library/Database.php';
  }


  public function allApplys()
  {
      
      $getdata = $this->db->select('*')->from('mi_apply');
      $result = $getdata->get();
      
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
//        foreach($con->query('SELECT * from '.PREFIX.'apply ORDER BY id DESC ') as $row) { $applys[] = $row; }    	
//        return $applys;
//        
//        $getdata = $this->db->select('id, username, password, firstname, lastname, zip, email, avatar, email_confirm, status')->get_where('mi_customer', array('email' => $data, 'email_confirm' => '1'));
//
//        if ($getdata->num_rows() == 1) {
//            return $getdata->result();
//        } else {
//            return false;
//        }
  }
    
    
  public function applyById($appid) 
  {     
       
     $getdata = $this->db->select('*')->get_where('mi_apply',array('app_id'=>$appid ));
    //  $result = $getdata->get();
          
        if ($getdata->num_rows() > 0) {
            return $getdata->result();
        } else {
            return false;
        }   
  }
    
  
//  public function countApplys($appid) 
//  {          
//        $con = new Database();
//        $con = $con->con();
//        $nRows = $con->query('SELECT count(*) from '.PREFIX.'apply WHERE app_id = "'.$appid.'" ')->fetchColumn();
//        return $nRows; 
//  }
//
//    
//  public function setStatus($appid,$status,$embsid,$visaid)
//  {
//        $con = new Database();
//        $con = $con->con();
//        $sql = "UPDATE ".PREFIX."apply SET status = :cstatus, embassy_id = :embId, visa_id = :visaId  WHERE app_id = :applyID";        
//        $stmt = $con->prepare($sql);
//        $stmt->bindParam(':cstatus', $status, PDO::PARAM_STR); 
//        $stmt->bindParam(':applyID', $appid, PDO::PARAM_INT);          
//        $stmt->bindParam(':embId', $embsid, PDO::PARAM_INT);          
//        $stmt->bindParam(':visaId', $visaid, PDO::PARAM_INT);          
//        if($stmt->execute()){
//            return 1;
//        }else{
//            return 0;
//        }      
//  }
//
//  public function updateNotice($appid,$notice)
//  {
//    $con = new Database();
//    $con = $con->con();
//    $sql = "UPDATE ".PREFIX."apply SET notice = :notice WHERE app_id = :applyID";
//    $stmt = $con->prepare($sql);
//    $stmt->bindParam(':notice', $notice, PDO::PARAM_STR);
//    $stmt->bindParam(':applyID', $appid, PDO::PARAM_STR);
//    if($stmt->execute()){
//      return 1;
//    }else{
//      return 0;
//    }
//  }
//
//  public function updateEmpname($app_id, $user_name)
//  {
//    $con = new Database();
//    $con = $con->con();
//    $sql = "UPDATE ".PREFIX."apply SET emp_working = :name WHERE app_id = :applyID";
//    $stmt = $con->prepare($sql);
//    $stmt->bindParam(':name', $user_name, PDO::PARAM_STR);
//    $stmt->bindParam(':applyID', $app_id, PDO::PARAM_STR);
//    if($stmt->execute()){
//       return 1;
//    }else{
//       return 0;
//    }
//  }



}
