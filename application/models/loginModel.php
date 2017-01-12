<?php
class loginModel 
{

  private $_con;
  
    
  public function __construct() 
  {
		require_once 'library/Database.php';
		$this->_con = new Database();	
    $this->_con = $this->_con->con();
  }
  
    
  public function userSignIn($user,$pass)
  {  
      $result =  $this->_con->query("SELECT `id`, `username`, `password`, `firstname`, `lastname`, `zip`, `email`, `avatar`, `email_confirm`, `status` FROM ".PREFIX."customer WHERE username = '".$user."' AND email_confirm = '1' ");	
        
      $result =  $this->_con->query("SELECT `id`, `username`, `password`, `firstname`, `lastname`, `zip`, `email`, `avatar`, `email_confirm`, `status` FROM ".PREFIX."customer WHERE username = '$user' AND email_confirm = '1' ");
        
      $user = $result->fetch(PDO::FETCH_ASSOC);        
      if (!$user)
      { 
            $out = "1";
          
      }elseif ($user["password"] <> $pass)
      { 
            $out = "2";
          
      }elseif ($user["status"] == "1")
      { 
           $out = "3";
          
      }else 
      {                
            $_SESSION[user_id] = $user["id"];
            $_SESSION[user_email] = $user["email"];
            $_SESSION[user_name] = $user["firstname"]." ".$user["lastname"];			    
            $_SESSION[user_key] = md5($user["id"].session_id().session_secret_key);              
            $_SESSION['avatar'] = $user["avatar"];
            $out = $user;
      }
      return $out;      
  }

    

}