<footer  class="mi-cl mi-drk-grey mi-footer  pt20">
    <div class="container">
    <div class="row">
       <div class="col-md-3 col-sm-3 col-xs-12 mi-footer-blk">
        <span class="mb20 mt20">NAVIGATION</span>
        <ul class="mi-ftrlinks">
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Sitemap</a></li>
        </ul>
       </div>
       <div class="col-md-3 col-sm-2 col-xs-12 mi-footer-blk">
        <span class="mb20 mt20">SERVICES</span>
        <ul class="mi-ftrlinks">
        <li><a href="#">Hospital</a></li>
        <li><a href="#">Visa</a></li>
        <li><a href="#">Flight</a></li>
        <li><a href="#">Hotel</a></li>
        <li><a href="#">Taxi / Buses</a></li>
        </ul>
       </div>
       <div class="col-md-3 col-sm-3 col-xs-12 mi-footer-blk">
        <span class="mb20 mt20">CONTACT</span>
        <p>
        Office Address:<br/>
        MiConsulting <br/>
        Paras Trade Centre<br/>
        Gurgaon - Faridabad Rd, Sector 2<br/>
        Gurgaon, India<br/>
        Phone: +91 88268 66295 
        </p>
       </div>
       <div class="col-md-3 col-sm-4 col-xs-12 mi-footer-blk ">
        <span class="mb20 mt20">NEWSLETTER</span>
        <div class="newsletter">
        <form>
        <input type="text" name="newsletter" placeholder="Email Address"/>
        <button class="submitnews" type="button">Subscribe</button>
        <p class="text-center mt10">Subscribe for news</p>
        </form>
        </div>
        </div>
       </div>
    </div>
    <div class="mi-copyrt mi-blk mt40 pt10 pb10">
       <div class="container">
       <div class="row">
          <div class="col-md-8 col-sm-7 col-xs-12  mi-btm-ftrlinks "> © Copyright 2015 - <a href="#"><img src="<?php base_url(); ?>assets/images/mi_sm_logo.png"></a> a Company of 
             <a href="#"><img src="<?php base_url(); ?>assets/images/misoft_sm_logo.png"></a></div>      
          <div class="col-md-4 col-sm-5 col-xs-12 mi-btm-ftrlinks text-right"><a href="#">Home</a> <a href="#">Services</a> <a href="#">About us</a> <a href="#">Contact</a> </div>
         </div>
       </div>
    </div>
</footer>

<!--model-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Clinic</h4>
      </div>
      <div class="modal-body">
         <form>
                <div class="mi-modelfilter">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                        <label class="fontnormal"> Select Clinic</label>
                        <select name="hospitals" class="form-control  mi-modelinput">
                              <option value="0" data-image="<?php base_url(); ?>assets/images/hlogo1.png"> Fortish</option>
                              <option value="1" data-image="<?php base_url(); ?>assets/images/hlogo1.png"> MAX</option>
                              <option value="2" data-image="<?php base_url(); ?>assets/images/hlogo1.png"> APPOLO</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <div class="form-group">
                        <label class="fontnormal"> Select Location </label>
                        <select class="form-control  mi-modelinput">
                            <option>Delhi</option>
                            <option>Chandigarh</option>
                            <option>Punjab</option>
                            <option>Hariyana</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         <div class="form-group">
                        <label class="fontnormal"> Select Speciality</label>
                        <select class="form-control  mi-modelinput">
                            <option>Dental</option>
                            <option>Ophthalmologist</option>
                            <option>Neurologist</option>
                            <option>Urologist</option>
                        </select>
                        </div>
                        </div>
                    </div>
                </div>
              </form>
      </div>
      <div class="modal-footer">
       <button class="btn btn-outline-blk pull-right rippleblk">SUBMIT</button>
      </div>
    </div>

  </div>
</div>



<!--angular-->
<script src="<?php base_url(); ?>assets/js/angular.min.1.6.1.js" type="text/javascript" ></script> 
<!--angular-->


<!--mi- cinsulting script--> 
<script src="<?php base_url(); ?>assets/js/jquery.min.js" type="text/javascript" ></script> 

<script src="<?php base_url(); ?>assets/js/bootstrap.js" type="text/javascript" ></script> 


<!--select--> 
<script src="<?php base_url(); ?>assets/plugin/select/jquery.dd.min.js"></script>
<script>
$(document).ready(function() {
	$("select").msDropdown();
})
</script>
<!--select-->

<!--owlslider-->  
<script src="<?php base_url(); ?>assets/plugin/owlcarousel/owl.carousel.js"></script>
<!--owlslider-->

<!--smoothscroll-->  
<script src="<?php base_url(); ?>assets/plugin/swiper/swiper.min.js"></script>
 <script>
    var swiper = new Swiper('.swiper-container', {
        scrollbar: '.swiper-scrollbar',
        scrollbarHide: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true
    });
 
    </script>
<!--smoothscroll-->






<!--datepicker--> 
<script src="<?php base_url(); ?>assets/plugin/datepicker/highlight.min.js"></script>
<script src="<?php base_url(); ?>assets/plugin/datepicker/jquery.easing.min.js"></script>
<script src="<?php base_url(); ?>assets/plugin/datepicker/datepicker.js"></script>
<script src="<?php base_url(); ?>assets/plugin/datepicker/i18n/datepicker.en.js"></script>
<!--datepicker--> 

<!--slider--> 
<script src="<?php base_url(); ?>assets/js/responsiveslides.min.js"></script> 
<!--slider--> 

<!--rangeslider-->
<script src="<?php base_url(); ?>assets/plugin/rangeslider/bootstrap-slider.js"></script> 
<!--rangeslider-->

<!--scroller-->
<script src="<?php base_url(); ?>assets/plugin/scrollbar/jquery.mCustomScrollbar.min.js"></script> 
<!--scroller-->

 <script type='text/javascript' src='<?php echo URL_ADMIN;?>js/jquery.multiselect.js'></script>




<script  src="<?php base_url(); ?>assets/js/micostum.js" type="text/javascript" ></script> 
<script src="<?php base_url(); ?>assets/js/wow.js" type="text/javascript" ></script> 
<script>
	new WOW().init();
            
</script> 
<!--mi- cinsulting script-->
<?php //echo $this->uri->segment(2);
 if($this->uri->segment(2)=='result'){?>
<!--lightbox-->
<script src="<?php base_url(); ?>assets/plugin/lightbox/lightbox.js"></script>

<!--lightbox-->
<?php }?>

</body>
</html>