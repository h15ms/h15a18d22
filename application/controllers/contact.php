<?php

 class contact extends CI_Controller { 

    function __construct() { 
       parent::__construct(); 
       $this->load->library('session'); 
       $this->load->helper('form'); 
       $this->active['current_page'] = $this->uri->segment(1);
    } 
  
    public function index() { 

       $this->load->view('template/header' , $this->active);
       $this->load->view('contact/index.php');
       $this->load->view('template/footer');
       $this->load->helper('form'); 
    } 

    public function send_mail() { 
       $from_email = "miconsulting.com"; 
       $to_email = $this->input->post('email'); 
 
       //Load email library 
       $this->load->library('email'); 
 
       $this->email->from($from_email, 'Ankit Vikalp'); 
       $this->email->to($to_email);
       $this->email->subject('Email'); 
       $this->email->message('Testing the email.'); 
 
       //Send mail 
       if($this->email->send()) 
       $this->session->set_flashdata("email_sent","Email sent successfully."); 
       else 
       $this->session->set_flashdata("email_sent","Error in sending Email."); 
       $this->load->view('email_form'); 
    } 
 } 
  














//   public function index() 
//   {      
// //    $this->_view->title = "Contact | MiConsulting.in";
// //    $this->_view->description = "";
// //    $this->_view->headline = "Contact";
// //    $this->_view->canonical = URL."contact/";
// //    $this->_view->display('contact/index.php');
      

//   }  

//   public function mail()
//   {
//     $name = $_POST["name"];
//     $phone = $_POST["phone"];
//     $email = $_POST["email"];
//     $message = $_POST["message"];

//     $mailtext = "";
//     $mailtext .= $name."\r\n";
//     $mailtext .= $phone."\r\n";
//     $mailtext .= $email."\r\n";
//     $mailtext .= $message."\r\n";

//     $receiver = "ankit.vikalp@harkemedia.com";
//     $sender   = $email;
//     $subject  = "Contact Form - midefenseinc.com";            
//     $header   = "MIME-Version: 1.0\r\n";
//     $header  .= "Content-type: text/html; charset=UTF-8\r\n";
//     $header  .= "From: $sender\r\n";                        
//     $header  .= "X-Mailer: PHP ". phpversion();

//     if(mail($receiver, $subject, $mailtext, $header))
//     {
//         echo "We've recived your contact information";
//     }
//     else 
//     {
//         echo "ERROR";
//     }
//   }
  
// }