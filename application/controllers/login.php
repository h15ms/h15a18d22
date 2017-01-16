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
		$this->load->model('login_model','login_model');
	}


	public function index()
	{

		if(isset($_SESSION['logged_in']['user_id'])){

		$this->load->view('template/header');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
			
		}else{

		$this->load->view('template/header');
		$this->load->view('login/index');
		$this->load->view('template/footer');
		}

	}

	public function registration()
	{
		$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);

		$result = $this->login_model->check_new_user($data);
		
		if($result->result_id->num_rows == "1")
		{
			$reg = "1"; // There is already an account with this email address provided
		
		}elseif($result->result_id->num_rows == "0"){
			
			$out = $this->login_model->registration_insert($data);

			$this->load->view('template/header');
			$this->load->view('login/index', $out);
			$this->load->view('template/footer');
		}
		

		$this->load->view('template/header');
		$this->load->view('login/index', $out);
		$this->load->view('template/footer');
	}

	public function login_check()
	{
		$data = array(
			'username' => $this->input->post('username') ,
			'password' => $this->input->post('pass')
		);

		 $result = $this->login_model->login($data); 

		if ($result == 'TRUE')
			{
			$username = $this->input->post('username');
			$result = $this->login_model->login_fetch($username); 

			if ($result != false)
				
				{
				$session_data = array(
					'user_id' => $result[0]->id,
					'user_email' => $result[0]->email,
					'user_name' => $result[0]->firstname." ".$result[0]->lastname,
					'user_key' => md5($result[0]->id.session_id()),
					'avatar' => $result[0]->avatar,
				);


				// Add user data in session

				$this->session->set_userdata('logged_in', $session_data);
				
				$this->load->view('template/header');
				$this->load->view('home/index');
				$this->load->view('template/footer');
				}
			}
		  else
			{
				if ($result == "1") {
					$data = array('error_message' => '1');
				}elseif($result == "2"){
					$data = array('error_message' => '2');
				}elseif($result == "3"){
					$data = array('error_message' => '3');
				}
			
			$this->load->view('template/header');
			$this->load->view('login/index', $data);
			$this->load->view('template/footer');
			}
	}
		

	// Logout from admin page

	public function logout()
	{
		$sess_array = array('username' => '');

		$this->session->unset_userdata('logged_in', $sess_array);

		$data['message_display'] = 'Successfully Logout';
		$this->load->view('template/header');
		$this->load->view('login/index', $data);
		$this->load->view('template/footer');
	}
	

}





 	

  

 






 ?>

 