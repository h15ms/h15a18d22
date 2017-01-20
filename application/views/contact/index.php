
<?php 

print_r($logged_in);
exit;

 ?>

<div id='main' data-scroll-offset='88'>

	 <div id='layer_slider_1' class='avia-layerslider main_color avia-shadow  avia-builder-el-0  el_before_av_textblock  avia-builder-el-first  container_wrap fullsize'    style='height: 221px;' ><script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script><script data-cfasync="false" type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_10_1','jquery'); } else { lsjQuery("#layerslider_10_1").layerSlider({responsiveUnder: 1140, layersContainer: 1140, autoStart: false, startInViewport: false, pauseOnHover: false, twoWaySlideshow: true, loops: 1, keybNav: false, touchNav: false, skin: 'fullwidth', globalBGColor: '#ffffff', navPrevNext: false, hoverPrevNext: false, navStartStop: false, navButtons: false, showCircleTimer: false, thumbnailNavigation: 'disabled', lazyLoad: false, yourLogoStyle: 'left: 10px; top: 10px;', cbInit: function(element) { }, cbStart: function(data) { }, cbStop: function(data) { }, cbPause: function(data) { }, cbAnimStart: function(data) { }, cbAnimStop: function(data) { }, cbPrev: function(data) { }, cbNext: function(data) { }, skinsPath: ''}) } }); </script><div class="ls-wp-fullwidth-container" style="height:220px;"><div class="ls-wp-fullwidth-helper"><div id="layerslider_10_1" class="ls-wp-container" style="width:100%;height:220px;margin:0 auto;margin-bottom: 0px;"><div class="ls-slide" id="#layer_apply" data-ls=" transition2d: all;"><img class="ls-l" style="top:50%;left:20%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;fadein:false;offsetxout:0;offsetyout:bottom;fadeout:false;" src="assets/img/mail.png" alt=""><img class="ls-l" style="top:50%;left:40%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;delayin:200;offsetxout:0;offsetyout:bottom;" src="assets/img/phone.png" alt=""><img class="ls-l" style="top:50%;left:60%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;delayin:400;offsetxout:0;offsetyout:bottom;" src="assets/img/mobil.png" alt=""><img class="ls-l" style="top:50%;left:80%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:bottom;delayin:600;offsetxout:0;offsetyout:bottom;" src="assets/img/email.png" alt=""></div></div></div></div></div><div id='after_layer_slider_1' class='main_color container_wrap fullsize'   ><div class='container' ><div class='template-page content  av-content-full alpha units'><div class='post-entry post-entry-type-page post-entry-9'><div class='entry-content-wrapper clearfix'>

<div class="col-xs-12 col-sm-12 col-md-12" id="msgout" style="display: none;">
   <div class="alert alert-success alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong>Warning!</strong> Hii Msg out 
   </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12" id="msgerr" style="display: none;">
   <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong>Warning!</strong> Better check yourself, you're not looking too good.
   </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

   <h1>Contact us</h1>
   <p>If you have any question about our servcie. Feel free and ask us, we will reply soon.</p>
    <hr style="margin-top:40px;margin-bottom:40px;">
</div>

<form action="" method="post">
<input type="hidden" value="send" name="contactForm">
<div class="col-xs-12 col-sm-12 col-md-12">  
   Name*:
    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
</div>

<div class="col-xs-12 col-sm-12 col-md-6">
   Phone*:
    <input type="text" id="phone" name="phone" class="form-control" placeholder="+93 1111 1111">
</div>

<div class="col-xs-12 col-sm-12 col-md-6">
   Email*:
    <input type="text" id="email" name="email" class="form-control" placeholder="name@domain.com">
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
   Message*:
   <textarea class="form-control" style="resize: none;" name="msg" placeholder="Your Message..." id="message" cols="30" rows="10"></textarea>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <button id="send_contact" type="submit" style="outline: 0" class="btn btn-lg">Send</button>
</div>
</form>

</div></div></div><!-- close content main div --> <!-- section close by builder template -->		</div><!--end builder template--></div><!-- close default .container_wrap element -->		
<!-- Latest compiled and minified CSS & JS -->


<script type="text/javascript">
     $("button#send_contact").click(function(){
       $.post("index.php?c=contact&a=mail",
       {
         name: $("#name").val(),
         phone: $("#phone").val(),
         email: $("#email").val(),
         message: $("#message").val()
       },
       function(data, status){
         if(data==1){
         $("#msgout").show();
         $("#name").val("");
         $("#phone").val("");
         $("#email").val("");
         $("#message").val("");
         }else if(data==0){
         $("#msgerr").show();
       }
       });
     });
   </script>

<!-- 
   <head> 
        <meta charset = "utf-8"> 
        <title>CodeIgniter Email Example</title> 
     </head>
   
     <body> 
        <?php 
           // echo $this->session->flashdata('email_sent'); 
           // echo form_open('/Email_controller/send_mail'); 
        ?> 
    
        <input type = "email" name = "email" required /> 
        <input type = "submit" value = "SEND MAIL"> 
    
        <?php 
           // echo form_close(); 
        ?> 
     </body> -->