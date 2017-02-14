<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Base extends CI_Controller
{

	public $session_data;
	public $left;
		
	function __construct()
	{
        error_reporting(0);
		parent::__construct();

		$this->session_data = $this->session->userdata('logged_in');
		$this->isLoggedIn();
		$this->access();
		//$this->removeIndexFromURL(); // Add Modules is not working using this fn() because of it remove index from url
		$this->left = $this->setLeftSideBar();

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

	public function removeIndexFromURL(){
	
		$url = uri_string();
		$url_array = array(explode('/', $url));

		if(end($url_array[0]) == 'index'){

			 $oldURL = base_url(uri_string());
			 $newURL = str_replace("/index", "", $oldURL );
			 redirect(rtrim($newURL, '/'),'location');
		}
	}



	public function getLayout($view = NULL ,$header = NULL, $left = NULL, $content = NULL, $footer = NULL){

	
	$left_new = array('left_base' => $this->left, 'left'=>$left);

	$dataConfig = array();
	$dataConfig['header'] = $header;
	$dataConfig['left'] = $left_new;
	$dataConfig['content'] = $content;
	$dataConfig['footer'] = $footer;

	$this->layout_decide($view ? $view : "admin/homecrm" ,$dataConfig);

  }


  public function layout_decide($view ,$dataConfig = array()) {
      
     $template = array();
     echo $template['header']   = $this->load->view('admin/temp/headercrm', $dataConfig['header'], true);
     echo $template['left']   = $this->load->view('admin/temp/leftcrm', $dataConfig['left'], true);
     echo $template['content'] = $this->load->view($view, $dataConfig['content'], true);
     echo $template['footer'] = $this->load->view('admin/temp/footercrm', $dataConfig['footer'], true);

  }  



  public function setLeftSideBar(){

	$data = $this->models->retrieveLeftPanelBySession();
		    $navigationCollection = array();
		

		foreach ($data as $node => $value) {
			
			if( $value->sub_id == 0 ){
			    $navigationCollection[$value->id]['nav'] = $value->root_heading;
			    $navigationCollection[$value->id]['icon'] = $value->icon;
			    $navigationCollection[$value->id]['url'] = $value->url;
			}else{
			  $navigationCollection[$value->sub_id]['sub-nav'][$value->id] = array(
			  																		'url' => $value->url, 
			  																		'sub_heading' => $value->sub_heading
			  																	);
			}

		}
		     return $navigationCollection;
		
  }
























}

 