<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of home
 *
 * @author Admin
 */
class Doctor extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        //$this->load->library('template');
        $this->load->library('template');
        $cars=array("Volvo","BMW","Toyota");
        $this->template->set('cars',$cars);
        $this->template->set(array('message' => 'Hi there!','message1' => 'Hi there!erewew b','message2' => 'Hi there!rewfrewrew '));
        
        
        
        
        
        
        $title = 'EVERYTHING WITH NGINE';
        $this->template->title('Blog', $title);
        
        
        
        
        
        
        $this->template->set('metadata','Layouts in this library are very similar to layouts in Ruby on Rails and other frameworks. The basic idea is that most of your pages will share the sam');
        
<<<<<<< HEAD:application/controllers/doctor.php
        $this->template
	// application/views/some_folder/header
	//  ->inject_partial('header', '<h1> 666 Hello World!</h1>')
	// application/views/layouts/two_col.php
	->set_layout('layout')
	// views/welcome_message
	->build('doctor/index');
        
        //$this->template->set_layout('layout')->build('doctor/index');
=======
//        $this->template
//	// application/views/some_folder/header
//	//  ->inject_partial('header', '<h1> 666 Hello World!</h1>')
//	// application/views/layouts/two_col.php
//	->set_layout('layout')
//	// views/welcome_message
//	->build('doctor/index');
        
        
        
        $this->template->set_layout('layout')->build('doctor/index');
>>>>>>> origin/master:application/controllers/Doctor.php
        
        
        
//        $this->template
//
//	// application/views/some_folder/header
//	->inject_partial('header', '<h1>Hello World!</h1>')
//
//	// application/views/layouts/two_col.php
//	->set_layout('two_col')
//
//	// views/welcome_message
        
        
        
        
      //  $this->template->build('welcome_message', array('message' => 'Hi there!'));
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
