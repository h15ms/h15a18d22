<?php 

class pagesController extends CI_Controller
{
	
	public function view( $page = 'index')
	{
		if(!file_exists(APPPATH.'views/home/'.$page.'.php')){
			show_404();
		}
		$data['title']=ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('home/'.$page, $data);
		$this->load->view('templates/footer');
	}

}


 ?>