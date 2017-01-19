<?php


class home  extends CI_Controller {

	public function __construct()
	{
	  parent:: __construct();
	  $this->active['current_page'] = $this->uri->segment(1);
	}
	

	public function index()
	{
		$this->load->view('template/header' , $this->active);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
}
