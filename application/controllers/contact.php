<?php
class contact extends CI_Controller{ 
  
    
  public function index() 
  {      
//    $this->_view->title = "Contact | MiConsulting.in";
//    $this->_view->description = "";
//    $this->_view->headline = "Contact";
//    $this->_view->canonical = URL."contact/";
//    $this->_view->display('contact/index.php');
      
          $this->load->view('template/header');
		$this->load->view('contact/index.php');
		$this->load->view('template/footer');
  }  

  public function mail()
  {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mailtext = "";
    $mailtext .= $name."\r\n";
    $mailtext .= $phone."\r\n";
    $mailtext .= $email."\r\n";
    $mailtext .= $message."\r\n";

    $receiver = "ankit.vikalp@harkemedia.com";
    $sender   = $email;
    $subject  = "Contact Form - midefenseinc.com";            
    $header   = "MIME-Version: 1.0\r\n";
    $header  .= "Content-type: text/html; charset=UTF-8\r\n";
    $header  .= "From: $sender\r\n";                        
    $header  .= "X-Mailer: PHP ". phpversion();

    if(mail($receiver, $subject, $mailtext, $header))
    {
        echo "We've recived your contact information";
    }
    else 
    {
        echo "ERROR";
    }
  }
  
}