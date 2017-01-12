<?php
class View {

  private $_login;
  private $_cconfig;
  private $_intern;
  private $_vars = array();

  public function __construct() {
    require_once 'config/controller.inc.php';
    $this->_cconfig = new ControllerConfig();    
  }

  public function __set($key, $value) {
    $this->_vars[$key] = $value;
  }

  public function render($tpl) {
  	$cc = $this->_cconfig->read(); 	
    extract($this->_vars);
    ob_start();  
	      include 'views/intern/header.tpl.php';
        include 'views/'.$tpl;
      	include 'views/intern/footer.tpl.php';
    return ob_get_clean();
  }

  public function display($tpl) {
    echo $this->render($tpl);
  }
}