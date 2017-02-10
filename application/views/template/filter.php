<?php define('URL', base_url()); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>mi- Consulting</title>
<link rel="mi- Consulting Favicon" type="image/x-icon" href="assets/images/favicon.ico" >

<!--mi- cinsulting css-->
<link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL; ?>assets/css/libs/animate.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL; ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
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
        <a class="navbar-brand" href="#"><img src="assets/images/mi_logo.png" alt="MI Consulting"></a> </div>
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
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="banner">
    <ul class="rslides" id="slider1">
      <li><img src="assets/images/1.jpg" alt=""></li>
      <li><img src="assets/images/2.jpg" alt=""></li>
      <li><img src="assets/images/3.jpg" alt=""></li>
      <li><img src="assets/images/4.jpg" alt=""></li>
    </ul>
    <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mi-multitab"> 
          <!-- Nav tabs -->
          <div class="tabbox">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#hospital" aria-controls="Hospital"><i class="iconhospital"></i><span class="mhide">Hospital</span></a></li>
              <li role="presentation"><a href="#vissa"  aria-controls="Vissa" ><i class="iconvissa"></i><span class="mhide">Vissa</span></a></li>
              <li role="presentation"><a href="#flight" aria-controls="Flight"><i class="iconflight"></i><span class="mhide">Flight</span></a></li>
              <li role="presentation"><a href="#hotels" aria-controls="Hotels" ><i class="iconhotels"></i><span class="mhide">Hotels</span></a></li>
              <li role="presentation"><a href="#car_buses" aria-controls="Car/Buses"><i class="iconcarbuses"></i><span class="mhide">Car/Buses</span></a></li>
            </ul>
            <!-- Tab panes -->
            <!--<div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="hospital">
              <form>
                <div class="searchtitle">
                 Search Hospital in India
                </div>
                <div class="mi-mnfilter">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                        <label> Select Hospital</label>
                        <select id="hospitals" name="hospitals" class="form-control mi-input" >
                              <option value="0" data-image="assets/images/hlogo1.png"> Fortish</option>
                              <option value="1" data-image="assets/images/hlogo1.png"> MAX</option>
                              <option value="2" data-image="assets/images/hlogo1.png"> APPOLO</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <div class="form-group">
                        <label> Select Location </label>
                        <select class="form-control mi-input">
                            <option>Delhi</option>
                            <option>Chandigarh</option>
                            <option>Punjab</option>
                            <option>Hariyana</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <div class="form-group">
                        <label> Select Speciality</label>
                        <select class="form-control mi-input">
                            <option>Dental</option>
                            <option>Ophthalmologist</option>
                            <option>Neurologist</option>
                            <option>Urologist</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <button class="btn btn-outline-blk pull-right ripple">SUBMIT</button>
                        </div>
                    </div>
                </div>
              </form>
              </div>
            </div>-->
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</header>
