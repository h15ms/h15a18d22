<?php
class LoginModel {

  private $_storage;

  public function __construct() {   
	
		try{		
		require 'library/Database.php';
		$con = connect_pdo();
		foreach($con->query('SELECT * from lr_user') as $row) {
			$users[] = $row;
		}
		} catch(){
		
		}

		$content = "Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit 		amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.";
		
    	$this->_storage = array(    				 
    				"meta_title" => "Dashboard Übersicht ", 
    				"meta_desc" => "Dashboard alles auf einen Blick", 
    				"headline" => "Dashboard",
    				"content" => $content,
    				"users" => $users, 
    				"user_count" => $row_count
    	);    	
    	
  }


  public function read() {
    
    	return $this->_storage;
    
  }




}