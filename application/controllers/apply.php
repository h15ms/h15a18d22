<?php
class apply extends CI_Controller
{


  public function __construct() 
  {
       parent:: __construct();
        require_once(APPPATH.'helpers/data_helper.php');

  }




  public function index()
  {      
    
// $data = $this->input->post();

    $this->load->view('template/header');
		$this->load->view('apply/index.php');
		$this->load->view('template/footer');
   
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

      $errors=0;

        $uploaddir = getcwd()."/assets/img/photos/";

          foreach ($_FILES['photos']['name'] as $name => $value)
          {
              $filename = stripslashes($_FILES['photos']['name'][$name]);
                $extension = getExtension($filename);
               $extension = strtolower($extension);

               // if (isset($_FILES['image'])) {
               //     $filename = $_FILES['image']['tmp_name'];
               //     list($width, $height) = getimagesize($filename);
               //     echo $width; 
               //     echo $height;    
               // }

               if ( ($extension != "jpeg") && ($extension != "jpg")) 
               {

                echo "Unknown extension!";
               }
              else
              {
                $filedimnsn = $_FILES['photos']['tmp_name'][$name];
                list($width, $height) = getimagesize($filedimnsn);
                echo $width;
                echo $height;
                if( $width<=1000 && $width>=350 && $height <= 1000 && $height >= 350 )
                {
                  $size=filesize($_FILES['photos']['tmp_name'][$name]);
                  if ($size > MAX_SIZE*1024)
                  {
                    echo "You have exceeded the size limit!";
                  }
                  else
                  {
                     $image_name=$filename.'.'.$extension;
                     $newname= $uploaddir.$image_name;
                     $copied = move_uploaded_file($_FILES['photos']['tmp_name'][$name], $newname);
                     if (!$copied) 
                     {       
                         echo "unsuccessful";
                     }
                     else 
                     {       
                         echo "Done!";                     
                     }
                  }
                }
              }
          }

      }
  
  public function thanks($rep)
  {
//        $this->_view->title = "Thank You | MiConsulting";
//        $this->_view->description = "";
//        $this->_view->headline = "Thank You";    
//        //$this->_view->canonical = URL."apply/thanksAction/";       
//        $this->_view->display('apply/thankyou.php');
        
    $this->load->view('template/header');
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