<?php $url=base_url(); 
define('$url_ADMIN', base_url() . 'assets/admin/'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" >
<title>mi- Consulting</title>
<link rel="mi- Consulting Favicon" type="image/x-icon" href="assets/images/favicon.ico" >

<!--mi- cinsulting css-->
<link href="<?php echo $url; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $url; ?>assets/css/libs/animate.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $url; ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $url; ?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $url; ?>assets/css/ripple.min.css" rel="stylesheet" type="text/css"/>
<!--slider-->
<link rel="stylesheet" href="<?php echo $url; ?>assets/css/responsiveslides.css" type="text/css" >
<!--slider-->

<!--select-->
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>assets/plugin/select/dd.css" />
<!--select-->

<!--owlslider-->  
<link rel="stylesheet"  type="text/css" href="<?php echo $url; ?>assets/plugin/owlcarousel/owl.carousel.css">
<!--owlslider-->  

<!--smoothscroll-->  
<link rel="stylesheet" href="<?php echo $url; ?>assets/plugin/swiper/swiper.min.css" type="text/css">
<!--smoothscroll-->  

<!--datepicker-->
<link href="<?php echo $url; ?>assets/plugin/datepicker/datepicker.min.css" rel="stylesheet" type="text/css">
<!--datepicker-->

<!--rangeslider-->
<link rel="stylesheet" href="<?php echo $url; ?>assets/plugin/rangeslider/bootstrap-slider.css">
<!--rangeslider-->


<!--lightbox-->
<link rel="stylesheet" href="<?php echo $url; ?>assets/plugin/lightbox/lightbox.css">
<!--lightbox-->

<!--scroller-->
<link rel="stylesheet" href="<?php echo $url; ?>assets/plugin/scrollbar/jquery.mCustomScrollbar.css">
<!--scroller-->
 <link rel='stylesheet' type='text/css' href='<?php echo $url_ADMIN;?>css/jquery.multiselect.css' />

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
          <a class="navbar-brand" href="<?php echo $url;?>"><img src="<?php echo $url; ?>assets/images/mi_logo.png" alt="MI Consulting"></a> </div>
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
            <li class="mi_menulist" role="menu" ><a href="<?php echo $url;?>service/">Services</a>
          <ul class="mi_sub-menu">
                        <li id="menu-item-299" class="">
                          <a href="<?php echo $url;?>service/visaservices/" itemprop="url">                  
                            Visa Services 
                          </a>
                        </li>
                        <li id="menu-item-300" class="">
                          <a href="<?php echo $url;?>service/businessservices/" itemprop="url">
                           Business Services
                          </a>
                        </li>
                        <li id="menu-item-301" class="">
                          <a href="<?php echo $url;?>service/passportservices/" itemprop="url">
                           Passport Services
                          </a>
                        </li>
                        <li id="menu-item-302" class="">
                          <a href="<?php echo $url;?>service/travelingservices/" itemprop="url">
                           Traveling Services
                          </a>
                        </li>
                        <li id="menu-item-304" class="">
                          <a href="<?php echo $url;?>service/ticketingservices/" itemprop="url">
                            Ticketing Services                       
                          </a>
                        </li>
                        <li id="menu-item-305" class="">
                          <a href="<?php echo $url;?>service/medicalservices/" itemprop="url">              
                            Medical Services   
                          </a>
                        </li>
                        <li id="menu-item-306" class="">
                          <a href="<?php echo $url;?>service/touristvisa/" itemprop="url">
                          Tourism Services
                          </a>
                        </li>
                        <li id="menu-item-307" class="">
                          <a href="<?php echo $url;?>service/accommodationservices/" itemprop="url">
                            Accommodation Services
                          </a>
                        </li>
                        <li id="menu-item-308" class="">
                          <a href="<?php echo $url;?>service/entertainmentservices/" itemprop="url">
                           Entertainment Services
                          </a>
                        </li>
                      </ul>
          
          
          
          </li>
          <li><a href="<?php echo $url;?>about/">About us</a></li>
          <li><a href="<?php echo $url;?>contact/">Contact</a></li>
            <?php if($_SESSION['logged_in']['user_id']){?>
          <li><a href="<?php echo $url;?>apply/">Apply</a></li>
            <?php }else{ ?>
          <li><a href="<?php echo $url;?>login/">Login</a></li>
           <?php } ?>
            <?php if($_SESSION['logged_in']['user_id']){ ?>

                    <?php if($_SESSION['logged_in']['user_level'] == '2' || $_SESSION['logged_in']['user_level'] == '1' && $_SESSION['logged_in']['user_level_status'] == '1'){ ?>
                 
         <li><a href="<?php echo $url;?>admin/homecrm">Dashboard</a></li>
        
         <?php }else{ ?>
<li><a href="<?php echo $url;?>dashboard/">Dashboard</a></li>
 <?php } ?>
<li><a href="<?php echo $url;?>login/logout">Logout</a></li>
 <?php } ?>

        </ul>
      </div>
    </div>
  </nav>
</header>
<!--headerend-->