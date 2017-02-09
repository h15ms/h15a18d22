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

		  if(( $this->session['user_level'] != '0' && $this->session['user_level_status'] != '1' ) ||( $this->session['user_level'] != '1' && $this->session['user_level_status'] != '1' ) || ( $this->session['user_level'] != '2' && $this->session['user_level_status'] != '1' ) || ( $this->session['user_level'] != '4' && $this->session['user_level_status'] != '1' )){

		  	redirect('home','location');
		  }
		  
		}else{
		  redirect('login','refresh');
		} 
	} 	

	public function access()
	{
		$user_level = $this->session['user_level'];
		if($user_level == '0'){
			return "developer";
		}elseif($user_level == '2'){
			return "admin";
		}elseif($user_level == '2'){
			return "agent";
		}elseif($user_level == '3'){
			return "member";
		}elseif($user_level == '4'){
			return "customer";
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
	   case '0':
	        $this->layout_developer($view ? $view : "admin/homecrm/index" ,$dataConfig);
	        break; 
	   case '1':
	        $this->layout_admin($view ? $view : "admin/homecrm/index" ,$dataConfig);
	        break;
	   case '2':
	        $this->layout_agent($view ? $view : "admin/homecrm/index" ,$dataConfig);
	        break;
	   case '3':
	        $this->layout_customer($view ? $view : "admin/homecrm/index" ,$dataConfig);
	        break;
	   case '4':
	        $this->layout_member($view ,$dataConfig);
	        break;
	}


  }


  public function layout_developer($view ,$dataConfig = array()) {
      
     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm_developer', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }  

  public function layout_admin($view ,$dataConfig = array()) {
      
     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm_admin', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }

  public function layout_agent($view ,$dataConfig = array()) {
      

     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm_agent', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }

  public function layout_member($view ,$dataConfig = array()) {
      
     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm_member', $dataConfig['left'], true);
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