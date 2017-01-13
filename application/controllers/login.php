<?php 


class login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('login');
	}


	public function index()
	{

		$this->load->view('login/index');
	}

	public function login_check()
		{
			$data = array(
				'username' => $this->input->post('username') ,
				'password' => $this->input->post('pass')
			);

			echo $result = $this->login->login($data); 

			if ($result == TRUE)
				{
				$username = $this->input->post('username');
				$result = $this->login->login_fetch($username); 

				if ($result != false)
					{
					$session_data = array(
						'username' => $result[0]->username,
						'email' => $result[0]->email,
					);

					// Add user data in session

					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('home/index');
					}
				}
			  else
				{
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('notFound/index', $data);
				}
		}
		

	// Logout from admin page

	// public function logout()
	// 	{

	// 	// Removing session data

	// 	$sess_array = array(
	// 		'username' => ''
	// 	);
	// 	$this->session->unset_userdata('logged_in', $sess_array);
	// 	$data['message_display'] = 'Successfully Logout';
	// 	$this->load->view('login_form', $data);
	// 	}
	







	// public function index() 
	// {    

	// if($_SESSION[user_id] != ""){
	//               header('Location: '.URL.'dashboard/'); 
	//       }
	//       else
	//       {          
	//           $exist = "0";
	//           $limit = "0";
	//           $err   = "0";
	//           $reg   = "0";

	              
	//           // SIGN UP
	//           if($_POST['firstname']!="" and $_POST['lastname']!="" and $_POST['email']!="" and $_POST['send']=="signup")
	//           {            
	           
	//               // check email 
	//               if($this->_model->countUserEmail($_POST['email']) == "0")
	//               {                            
	//                   // get confirm code
	//                   $ccode = $this->_model->getSecretCode("32");
	                  
	//                   // save customer data
	//                   $nu = $this->_model->saveNewUser($_POST, $ccode);
	//                   if($nu != "0")
	//                   {                    
	//                       # Confirm link
	//                       $conlink = URL."login/confirm/?email=".$_POST['email']."&code=".$ccode;
	                      
	//                       # Send Email 
	//                       $mailtext = '<html><head><title>Confirm Your Email Address</title></head><body>
	//                       <h2>Confirm Your Email Address</h2>
	//                       <p>Please confirm your email by clicking on the link below:</p>
	//                       <p><a href="'.$conlink.'">'.$conlink.'</a></p>
	//                       <p>After confirmation you will receive your login information by email and you can log in to MyNgine.</p>
	//                       <p>Best regards<br>Your MiConsulting Team</p>
	//                       </body></html>';
	//                       $touser  = $_POST['email'];
	//                       $from    = "support@miconsulting.in";
	//                       $subject = "Confirm your Email - MiConsulting Registration";            
	//                       $header  = "MIME-Version: 1.0\r\n";
	//                       $header .= "Content-type: text/html; charset=UTF-8\r\n";
	//                       $header .= "From: $from\r\n";                        
	//                       $header .= "X-Mailer: PHP ". phpversion();
	//                       mail($touser, $subject, $mailtext, $header);
	                      
	//                       $reg  = "3";
	                      
	//                   }else{
	//                       $reg  = "2";
	//                   }
	                  
	//               }else{
	//                   $reg  = "1";
	//               }  
	              
	//           }
	        
	//           // LOGIN        
	//           if($_POST['username']!="" and $_POST['pass']!="" and $_POST['send']=="signin")
	//           {
	//               // Login 
	//               require 'models/login.php';
	//               $login = new login();
	//               $user = $login->userSignIn($_POST['username'],$_POST['pass']);  

	//               if($_SESSION[user_id]!=""){
	//                   header('Location: '.URL.'dashboard/'); 
	//               }

	//           }

	           
	//               $this->_view->reg = $reg;	   
	//               $this->_view->err = $err;	   
	//               $this->_view->exist = $exist;
	//               $this->_view->limit = $limit;      
	//               $this->_view->title = "Customer Sign In - Sign Up | MiConsulting";
	//               $this->_view->description = "";
	//               $this->_view->headline = "Sign In - Sign Up";    
	//               $this->_view->canonical = URL."login/";       
	//               $this->_view->display('login/index.tpl.php');
	//       }

	      
	      
	// }
}





 	

  

 






 ?>