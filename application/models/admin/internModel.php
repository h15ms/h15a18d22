<?php
class interModel 
{

    
  public function __construct() 
  {
		require_once 'library/Database.php';				
  }


  public function userInfos($userid) 
  {          
        $con = new Database();
        $con = $con->con();        
        $pro = $con->query('SELECT * from '.PREFIX.'admins WHERE id = "'.$userid.'" LIMIT 1 ')->fetch(PDO::FETCH_ASSOC);  
        return $pro;      
  }


}