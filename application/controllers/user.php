<?php 

class user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model', 'um');
	}

	function index()
	{
		$this->load->view('template/header');
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

		$this->um->user_info_edit($data);


		$this->load->view('template/header');
		$this->load->view('user/user_edit');
		$this->load->view('template/footer');
	}

}









 ?>