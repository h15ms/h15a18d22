<?php
class apply extends CI_Controller
{


  public function __construct() 
  {
      parent:: __construct();
      $this->load->model('applyModel', 'model');
      $this->active['current_page'] = $this->uri->segment(1);
  }


  public function index()
  {      
    
    if(isset($_SESSION['logged_in']['user_id']))
    {
      $this->load->helper('data_helper');
      $data = getdata();
      
      if(isset($_POST['applyform']) && ($_POST['applyform']=='send'))
      {  
        $image_upload = $this->imageInsert($_FILES);
        if($image_upload == 'done'){
          
          $result = $this->model->saveApply($this->input->post());
          if($result == '1'){
            $this->load->view('template/header' , $this->active);
            $this->load->view('apply/thankyou.php');
            $this->load->view('template/footer');
          }else{            
            $data1 = array('image_upload_error' => $result);
          }
        
        }else{
          $data1 = array('image_upload_error' => $image_upload);
        }

      }
      
      $this->load->view('template/header' , $this->active);
      $this->load->view('apply/index.php', array('data' => $data, 'error' => $data1));
      $this->load->view('template/footer');
    
    }else{

      $data = array('login_first' => '1');

      $this->load->view('template/header' , $this->active);
      $this->load->view('login/index', $data);
      $this->load->view('template/footer');
    }


  }  

    public function imageInsert($arr)
     {
   
      define ("MAX_SIZE","300"); 
      function getExtension($str)
      {
           $i = strrpos($str,".");
           if (!$i) { return ""; }
           $l = strlen($str) - $i;
           $ext = substr($str,$i+1,$l);
           return $ext;
      }
        $uploaddir = getcwd()."/assets/img/photos/";

          foreach ($_FILES['photos']['name'] as $name => $value)
          {
              $filename = stripslashes($_FILES['photos']['name'][$name]);
                $extension = getExtension($filename);
               $extension = strtolower($extension);

               if ( ($extension != "jpeg") && ($extension != "jpg")) 
               {

                $out = "Unknown extension!";
               }
              else
              {
                $filedimnsn = $_FILES['photos']['tmp_name'][$name];
                list($width, $height) = getimagesize($filedimnsn);

                // if( $width<=1000 && $width>=350 && $height <= 1000 && $height >= 350 )
                // {
                  $size=filesize($_FILES['photos']['tmp_name'][$name]);
                  if ($size > MAX_SIZE*1024)
                  {
                    $out = "You have exceeded the size limit!";
                  }
                  else
                  {
                     $image_name=$filename.'.'.$extension;
                     $newname= $uploaddir.$image_name;
                     $copied = move_uploaded_file($_FILES['photos']['tmp_name'][$name], $newname);
                     if (!$copied) 
                     {       
                         $out = "unsuccessful";
                     }
                     else 
                     {       
                         $out = "done";                     
                     }
                  }
                // }
              }
          }

          return $out;

      }
  
  public function thanks($rep)
  {
//        $this->_view->title = "Thank You | MiConsulting";
//        $this->_view->description = "";
//        $this->_view->headline = "Thank You";    
//        //$this->_view->canonical = URL."apply/thanksAction/";       
//        $this->_view->display('apply/thankyou.php');
        
    $this->load->view('template/header' , $this->active);
		$this->load->view('apply/thankyou.php');
		$this->load->view('template/footer');
  }
   
  public function mailapply()
  {
      $email = $_POST['ReEnterEmail'];
      $mailtext = "<html><head><title>Thanks for Apply</title></head><body></body></html>";

      $receiver = "ankit.vikalp@harkemedia.com";
      $sender   = $email;
      $subject  = "Contact Form - midefenseinc.com";            
      $header   = "MIME-Version: 1.0\r\n";
      $header  .= "Content-type: text/html; charset=UTF-8\r\n";
      $header  .= "From: $sender\r\n";                        
      $header  .= "X-Mailer: PHP ". phpversion();

      if(mail($receiver, $subject, $mailtext, $header))
      {
          return "We've recived your contact information";
      }
      else 
      {
          return "ERROR in Mail";
      }
  }

}