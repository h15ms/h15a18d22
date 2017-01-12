<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD:application/controllers/home.php
class home extends CI_Controller {
=======
class home  extends CI_Controller {
>>>>>>> origin/master:application/controllers/home.php

	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
}
