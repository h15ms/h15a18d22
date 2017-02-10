<?php define('URL', base_url()); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" >
<title>mi- Consulting</title>
<link rel="mi- Consulting Favicon" type="image/x-icon" href="assets/images/favicon.ico" >

<!--mi- cinsulting css-->
<link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL; ?>assets/css/libs/animate.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL; ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL; ?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL; ?>assets/css/ripple.min.css" rel="stylesheet" type="text/css"/>
<!--slider-->
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/responsiveslides.css" type="text/css" >
<!--slider-->

<!--select-->
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/plugin/select/dd.css" />
<!--select-->

<!--owlslider-->  
<link rel="stylesheet"  type="text/css" href="<?php echo URL; ?>assets/plugin/owlcarousel/owl.carousel.css">
<!--owlslider-->  

<!--smoothscroll-->  
<link rel="stylesheet" href="<?php echo URL; ?>assets/plugin/swiper/swiper.min.css" type="text/css">
<!--smoothscroll-->  

<!--datepicker-->
<link href="<?php echo URL; ?>assets/plugin/datepicker/datepicker.min.css" rel="stylesheet" type="text/css">
<!--datepicker-->

<!--rangeslider-->
<link rel="stylesheet" href="<?php echo URL; ?>assets/plugin/rangeslider/bootstrap-slider.css">
<!--rangeslider-->


<!--lightbox-->
<link rel="stylesheet" href="<?php echo URL; ?>assets/plugin/lightbox/lightbox.css">
<!--lightbox-->

<!--scroller-->
<link rel="stylesheet" href="<?php echo URL; ?>assets/plugin/scrollbar/jquery.mCustomScrollbar.css">
<!--scroller-->


<?php //echo $this->uri->segment(2);
 if($this->uri->segment(2)=='result'){?>



<?php }?>

</head>
<body>
<header>
  <nav class="navbar no-border no-margin mimob_p10">
    <div class="container" style="position:relative;"  ng-controller="mainController">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo URL; ?>assets/images/mi_logo.png" alt="MI Consulting"></a> </div>
       <div class="search">
         <button name="search" type="button" class="mi-srch">
          <i class="fa fa-search" aria-hidden="true"></i> 
         </button>
      </div>
      <div class="mi_srchbox col-md-5 col-sm-5 col-xs-12" >
          <div class="mi_srchrelative" >
            <form>
             <input name="search" type="text" placeholder="Search..." />
            <button type="button" class="fa fa-search mi_searchbtn"></button>
            </form>
           </div>
        </div>
      <div class="collapse navbar-collapse navbar-right mi-navstyle" id="myNavbar">
        <ul class="nav navbar-nav ">
          <li><a href="#">Services</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!--headerend-->