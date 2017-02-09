<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Base extends CI_Controller
{

	public $session;
		
	function __construct()
	{
        error_reporting(0);
		parent::__construct();
		$this->session_data = $this->session->userdata('logged_in');
		$this->access();
	}

	public function isLoggedIn()
	{
		if(isset($_SESSION['logged_in'])){

		  if(( $this->session_data['user_level'] != '0' && $this->session_data['user_level_status'] != '1' ) ||( $this->session_data['user_level'] != '1' && $this->session_data['user_level_status'] != '1' ) || ( $this->session_data['user_level'] != '2' && $this->session_data['user_level_status'] != '1' ) || ( $this->session_data['user_level'] != '4' && $this->session_data['user_level_status'] != '1' )){

		  	redirect('home','location');
		  }
		  
		}else{
		  redirect('login','refresh');
		} 
	} 	


	public function access()
	{
		$this->load->model('admin/BaseModel' , 'models');  

		$adminController = $this->uri->segment(2); 
		$adminAction = $this->uri->segment(3);
		$level = $this->session_data['user_level'];


		if(isset($adminController)){ 

			if(isset($adminAction)){ //if URL coantains any Action as well as controller
				$out = $this->models->retrieveUserAccessMethod($level, ucfirst($adminController), $adminAction); // it will output the list of all controllers related to that User_level

			}else{  //if URL coantains controller only not action
				$out = $this->models->retrieveUserAccessController($level, ucfirst($adminController));
		
			}
		}else{ 
			echo "Not Admin Panel Go to the base access";
		}


		if($out != NULL){ // if user_level contains that controller and action

			//print_r( $out);

		}else{        // if user_level does not contain that controller and action

			redirect(base_url().'admin/homecrm/index','location'); // You are not allowed to access that controller of admin
		
		}

	} 



public function getLayout($view = NULL ,$header = NULL, $left = NULL, $content = NULL, $footer = NULL){
	
	$dataConfig = array();
	$dataConfig['header'] = $header;
	$dataConfig['left'] = $left;
	$dataConfig['content'] = $content;
	$dataConfig['footer'] = $footer;

	$user_type = $this->session_data['user_level']; 

	switch ($user_type) {
	   case '0':
	        $this->layout_developer($view ? $view : "admin/module" ,$dataConfig);
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