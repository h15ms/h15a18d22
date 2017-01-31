<?php 

class NotFound  extends CI_Controller
{
	public function __construct()
	{
	  parent:: __construct();
	  error_reporting(0);
	  $this->active['current_page'] = $this->uri->segment(1);
	}
	

	function index()
	{
		$this->load->view('template/header' , $this->active);
		$this->load->view('404/index');
		$this->load->view('template/footer');
	}
}










 ?>
 
