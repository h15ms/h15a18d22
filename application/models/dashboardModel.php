<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model {
  
    
  public function __construct() 
  {
      parent:: __construct();

  }
    
  
  public function getCustomerData($customer_id = '0')
  {
    $result = $this->db->get_where('mi_apply', array('id' => '10000'));
    $res = $result->result();
    return $res['0'];
  }
    
    
  // public function getCustomerDataByUsername($user)
  // {
  //       $con = $this->_con->con();
  //       $pro = $con->query("SELECT * FROM ".PREFIX."customer WHERE username = '".$user."' LIMIT 1 ")->fetch(PDO::FETCH_ASSOC);  
  //       return $pro;
  // }
    
    
  // public function getSecretCode($len)
  // {
  //       $pool = "qwertzupasdfghkyxcvbnm";
  //       $pool .= "0123456789";
  //       $pool .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //       srand ((double)microtime()*1000000);
  //       for($index = 0; $index < $len; $index++){
  //           $npw .= substr($pool,(rand()%(strlen ($pool))), 1);
  //       }
  //       return $npw;
  // }
    
    
  // public function countUserEmail($email)
  // {
  //       $con = $this->_con->con();
  //       $nRows = $con->query('SELECT count(*) from '.PREFIX.'customer WHERE email = "'.$email.'" ')->fetchColumn(); 
  //       return $nRows;
  // }    
    
    
  //  # username  password	 firstname	lastname  email regtime  date  email_code 
  //  public function saveNewUser($arr, $code)
  //  {   
  //     $con = $this->_con->con();
  //     $sql = "INSERT INTO ".PREFIX."customer (             
  //            username,
  //            password,
  //            firstname,
  //            lastname,
  //            email,
  //            regtime,
  //            date,
  //            email_code) VALUES (
  //            :cusername,
  //            :cpassword,
  //            :cfirstname,
  //            :clastname,
  //            :cemail,
  //            :cregtime,
  //            :cdate,
  //            :cemail_code)";
  //       $stmt = $con->prepare($sql);                                  
  //       $stmt->bindParam(':cusername',      $arr['email'], PDO::PARAM_STR);       
  //       $stmt->bindParam(':cpassword',      $this->getSecretCode("8"), PDO::PARAM_STR);       
  //       $stmt->bindParam(':cfirstname',     $arr['firstname'], PDO::PARAM_STR); 
  //       $stmt->bindParam(':clastname',      $arr['lastname'], PDO::PARAM_STR); 
  //       $stmt->bindParam(':cemail',         $arr['email'], PDO::PARAM_STR);                      
  //       $stmt->bindParam(':cregtime',       time(), PDO::PARAM_STR); 
  //       $stmt->bindParam(':cdate',          date('d.m.Y'), PDO::PARAM_STR); 
  //       $stmt->bindParam(':cemail_code',    $code, PDO::PARAM_STR);         
  //       if($stmt->execute()){
  //           return $con->lastInsertId();
  //       }else{
  //           return 0;
  //       }         
  // }
    
        
  // public function countConfirmEmail($email,$code)
  // {
  //       $con = $this->_con->con();
  //       $nRows = $con->query('SELECT count(*) from '.PREFIX.'customer WHERE email = "'.$email.'" AND email_code = "'.$code.'" AND email_confirm = "0" ')->fetchColumn(); 
  //       return $nRows;
  // }
    
    
  // public function setConfirmStatus($userid)
  // {              
  //       $con = $this->_con->con();
  //       $sql = "UPDATE ".PREFIX."customer SET email_confirm = '1' WHERE id = :userID";        
  //       $stmt = $con->prepare($sql);        
  //       $stmt->bindParam(':userID', $userid, PDO::PARAM_INT);          
  //       if($stmt->execute()){
  //           return 1;
  //       }else{
  //           return 0;
  //       }
  // }  

  public function displayAll()
  {
    
    $sess = $this->session->userdata();
    $result = $this->db->get_where('mi_apply', array('user_id' => $sess['logged_in']['user_id']));
    return $result;

  }  


}