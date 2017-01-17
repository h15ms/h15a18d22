<?php 

class root extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
                
//                $this->load->library('url');

	}


	public function index()
	{

            echo $this->uri->segment('1');
            exit;
            
            
		if ($this->uri->segment('1') == "admin") {
			
			$this->load->view('admin/temp/headercrm');
			$this->load->view('admin/homecrm/index');
			$this->load->view('admin/temp/footercrm');
		
		}else{

			$this->load->view('template/header');
			$this->load->view('home/index');
			$this->load->view('template/footer');

		}
	}
}



 ?>