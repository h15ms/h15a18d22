<?php

 class Contact extends CI_Controller { 

    function __construct() { 
       parent::__construct(); 
       error_reporting(0);
       $this->load->library('session'); 
       $this->load->helper('form'); 
       $this->active['current_page'] = $this->uri->segment(1);
    } 
  
    public function index() { 
       $data=array('headline' => 'Contact','title'=>"Contact | MiConsulting.in");
       $this->load->view('template/header' , $data);
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
  




