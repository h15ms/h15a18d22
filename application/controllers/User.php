<?php 

class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->model('user_model', 'model');
		$this->active['current_page'] = $this->uri->segment(1);
	}

	function index()
	{
		
		// $ank = $this->model->sess();
		// echo "<pre>";
		// print_r($ank);
		// echo "</pre>";
		// exit;

		$result = $this->model->retrieve_sess_data($_SESSION['logged_in']['user_id'])->result();

		$data = array(
			'firstname' => $result['0']->firstname,
			'lastname' => $result['0']->lastname,
			'street' => $result['0']->street,
			'zip' => $result['0']->zip,
			'city' => $result['0']->city,
			'state' => $result['0']->state,
			'country' => $result['0']->country,
			'email' => $result['0']->email,
			'phone' => $result['0']->phone,
			'avatar' => $result['0']->avatar
			);

		// print_r($result);
		// exit;

		$this->load->view('template/header' , $this->active);
		$this->load->view('user/user_edit' , $data);
		$this->load->view('template/footer');
	}

	function edit_user()
	{
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$street = $this->input->post('street');
		$zip = $this->input->post('zip');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$country = $this->input->post('country');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$avatar = $this->input->post('avatar');

		$data = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'street' => $street,
			'zip' => $zip,
			'city' => $city,
			'state' => $state,
			'country' => $country,
			'email' => $email,
			'phone' => $phone,
			'avatar' => $avatar
			);

		$sess_user_id = $_SESSION['logged_in']['user_id'];

		$result = $this->model->user_info_edit($data , $sess_user_id);

		$this->load->view('template/header' , $this->active);
		$this->load->view('dashboard/index', array('result' => $result));
		$this->load->view('template/footer');
	}

}









 ?>
