<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Base extends CI_Controller
{

	public $session;
		
	function __construct()
	{
        error_reporting(0);
		parent::__construct();
		$this->session = $this->session->userdata('logged_in');
	}

	public function isLoggedIn()
	{
		if(isset($_SESSION['logged_in'])){

		  if(( $this->session['user_level'] != '1' && $this->session['user_level_status'] != '1' ) || ( $this->session['user_level'] != '2' && $this->session['user_level_status'] != '1' ))
		  {  
		  	redirect('home','refresh');
		  }
		  
		}else{
		  redirect('login','refresh');
		} 
	} 



public function getLayout($view = NULL ,$header = NULL, $left = NULL, $content = NULL, $footer = NULL){

	$dataConfig = array();
	$dataConfig['header'] = $header;
	$dataConfig['left'] = $left;
	$dataConfig['content'] = $content;
	$dataConfig['footer'] = $footer;

	$user_type = $this->session['user_level']; 
	switch ($user_type) {
	   case '1':
	        $this->layout_admin($view ? $view : "admin/homecrm/index" ,$dataConfig);
	        break;
	   case '2':
	        $this->layout_agent($view ? $view : "admin/homecrm/index" ,$dataConfig);
	        break;
	   case '3':
	        $this->layout_member($view ? $view : "admin/homecrm/index" ,$dataConfig);
	        break;
	   case '4':
	        $this->layout_customer($view ,$dataConfig);
	        break;
	}


  }


  public function layout_admin($view ,$dataConfig = array()) {
      
     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }

  public function layout_agent($view ,$dataConfig = array()) {
      

     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }

  public function layout_member($view ,$dataConfig = array()) {
      
     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }

  public function layout_customer($view ,$dataConfig = array()) {
      
     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }



}

  ?>