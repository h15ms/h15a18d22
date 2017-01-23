<?php


class home  extends CI_Controller {

	public function __construct()
	{
	  parent:: __construct();
	  $this->active['current_page'] = $this->uri->segment(1);
	}
	

	public function index()
	{
            
            $data=array('headline' => 'Home','title'=>"Travel to India with MiConsulting | MiConsulting.in");
		$this->load->view('template/header' ,$data);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
}
