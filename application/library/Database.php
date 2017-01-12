<?php
class Database 
{

    private $_con;
    private $_con2;
    
    public function __construct() {    	
  	}

    public function con()
	{
	    $this->_con = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME, DB_USER, DB_PASS);  
	    $this->_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	    $this->_con->exec("SET CHARACTER SET ".DB_CHARSET);  //  return all sql requests as UTF-8  
		return $this->_con;
	}
	
	public function conClient($clientdb)
	{
	    $this->_con2 = new PDO('mysql:host='.DB_HOST.'; dbname='.PREFIX.$clientdb, DB_USER, DB_PASS);  
	    $this->_con2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	    $this->_con2->exec("SET CHARACTER SET ".DB_CHARSET);  //  return all sql requests as UTF-8  
		return $this->_con2;
	}

}


