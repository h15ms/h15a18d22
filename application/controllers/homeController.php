<?php
class homeController extends CI_Controller
{

  private $_view;
  private $_model;

    
  public function __construct() 
  {
    parent::__construct();

  }

    

    
  public function index() 
  {               

$this->load->view('templates/header');
    $this->load->view('home/index');
    $this->load->view('templates/footer');
  }  
    
    
  public function sendmail() 
  {  	       
      
      if($_GET['name']!="" && $_GET['phone']!="" && $_GET['email']!="" && $_GET['msg']!="")
      {
            // Send mail
            $mailtext = '<html><head><title>Contact Form</title></head><body>
            <h2>'.$_GET["name"].'</h2>
            <p>Phone: '.$_GET["phone"].'</p>
            <p>Email: '.$_GET["email"].'</p>
            <p>Message:<br>'.$_GET["msg"].'</p>        
            </body></html>';
            #$empfaenger = "info@miconsulting.in";
            $empfaenger = "info@harkemedia.de";
            $absender   = $_GET['email'];
            $betreff    = "Contact on MiConsulting";            
            $header  = "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $header .= "From: $absender\r\n";                        
            $header .= "X-Mailer: PHP ". phpversion();
            mail($empfaenger, $betreff, $mailtext, $header);            
      }else{
            echo "err";
      }
  }
    
    
 
}