


<section class="mi_cl mi_topmenu mi-lt-grey pt10 pb10">
<div class="container text-center">
   <ul>
	   <li class="activeblk text-center"> <a href="#"><i class="iconhospital tabicon_inblock "></i>Hospital </a></li>
	   <li class="text-center"><a href="#"><i class="iconvissa tabicon_inblock "></i> Vissa </a></li>
	   <li class="text-center"><a href="#"><i class="iconflight tabicon_inblock "></i> Flight </a></li>
	   <li class="text-center"><a href="#"><i class="iconhotels tabicon_inblock "></i> Hotels </a></li>
	   <li class="text-center"><a href="#"><i class="iconcarbuses tabicon_inblock "></i> Car/Buses </a></li> 
   </ul>
</div>
</section>
<section class="mi_cl mt40 mb40">
<div class="container">
<div class="row">

<div class="mi_lftfilter mi-lt-grey col-md-3 col-sm-3 col-xs-5 content mCustomScrollbar">
<form>
<div class="mi_filtertitle">
Short By
</div>
<ul class="mi_radiobox_block list-inline ">
<li>
  <label for="hospital"> 
   <input type="radio" checked id="hospital" name="miradioselect" class="radiobox radiobox-inline mi_radioboxicon"/> Hospital
   <span></span>
  </label>
 
</li>
<li>
  <label for="instant_booking">
  <input type="radio" id="instant_booking" name="miradioselect" class="radiobox  radiobox-inline mi_radioboxicon"/> Instant Booking
  <span></span>
  </label>
</li>
</ul>
<div class="mi_filtertitle">
Location
</div>

<ul class="mi_radiobox_block">
    <?php foreach($hospitalLocation as $location){ ?>
<li>
  <label for="rohini"> 
   <input type="radio" id="rohini" name="miradioselect" class="radiobox radiobox-inline mi_radioboxicon"/> <?php echo $location->location_area; ?>
   <span></span>
  </label>
 
</li>
    <?php } ?>

</ul>
<!--<div class="mi_filtertitle">
Availavility
</div>
<div class="datepicker-here datepicker-promo pull-left"></div>-->

<div class="mi_range-slide pull-left mb10 text-center">
<span class="mi_rangevalue">12:00 AM</span> <span class="mi_rangevalue1"></span>
<input id="timerange" type="text" class="span2"/> 
</div>

<div class="mi_range-slide pull-left mb10 ">
<!--<div class="mi_filtertitle">
Consulting Fee - <span class="mi_rangevaluec"> ( 1000+ )</span> 
</div>
<input id="pricerange" type="text" class="span2"/> -->
 <select name="specializationw[]" multiple id="specializationw">
                    <?php foreach($speciliztion as $val ){?>

                          <option value="<?php echo $val->id;?>"><?php echo $val->sepcialization ;?></option>
                          <?php } ?>

                  </select>
</div>


<div class="mi_advertisement col-md-12 mt20 text-center pull-left">
<img src="<?php echo base_url(); ?>assets/images/hart.png" class="img-responsive" >
</div>
</form>
<div class="clearfix"></div>
</div>



<div class="mi_filterresult col-md-9 col-sm-9 col-xs-12">
<div class="mi_modifyfilter col-md-12 col-sm-12 col-xs-12 text-right mb10">
<span class="pull-left mi_filtermatches hidden-xs">203 matches Found for <span class="mi-drktxt-grey">Dental Clinics</span></span> 
<a href="javascript:void(0)" class="mi_shortby">
<i class="mi_filtericon"></i><span>Short By</span>
</a>
<a href="javascript:void(0)" class="mi_modify">
<span>Modify Filter</span><i class="mi_filterdropicon"></i>
</a>
</div>
<div class="mi_modifyfilterbox mi-lt-grey col-md-12 col-sm-12 col-xs-12 mb10">
<div class="panel panel-default no-margin">
<div class="panel-body ">
                  <form>
                    <div class="searchtitle"> Search Hospital in India </div>
                    <div class="mi-mnfilter">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group">
                            <label> Select Hospital</label>
                            <select id="hospitals" name="hospitals" class="form-control mi-input" >
                              <option value="0" data-image="<?php echo base_url(); ?>assets/images/hlogo1.png"> Fortish</option>
                              <option value="1" data-image="<?php echo base_url(); ?>assets/images/hlogo1.png"> MAX</option>
                              <option value="2" data-image="<?php echo base_url(); ?>assets/images/hlogo1.png"> APPOLO</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group">
                            <label> Select Location </label>
                            <select class="form-control mi-input">
                            <?php foreach($speciliztion as $spec){?>
                                
                               <option value="<?php echo $val->id;?>"><?php echo $val->sepcialization ;?></option>  
                                
                            <?php }?>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <option>Delhi</option>
                              <option>Chandigarh</option>
                              <option>Punjab</option>
                              <option>Hariyana</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group clearfix">
                            <label> Select Speciality</label>
                            <select class="form-control mi-input">
                              
                              
                              
                               <?php echo $vari; ?>
                              
                              
                              
                              
                              
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button class="btn btn-outline-grey pull-right ripplegrey">SUBMIT</button>
                        </div>
                      </div>
                    </div>
                  </form>
				  </div>
				  </div>
</div>
<div class="mi_filterdata">
   <div class="mi_filterdatabox mi-lt-grey mb10 wow fadeInUp">
      <div class="mi-hospitalimage"> 
	  <img src="<?php echo base_url(); ?>assets/images/appolo.jpg" class="img-responsive">
	  </div>
	  <div class="mi-hospitaldetails pl0">      
		    <div class="col-md-10  col-sm-10 col-xs-10">
			 <span class="mi_filtertitle">Appollo in Delhi</span>
			 <span class="mi_doctortype">1 Dentist , 2 Cosmetict </span>
			</div>
            <div class="col-md-2 col-sm-2 col-xs-2">
			<img src="<?php echo base_url(); ?>assets/images/hospital-logo/appolo.png" class="img-responsive">
			</div>
            <div class="col-md-12 mi_hospitalservices mt5 pull-left">
                  <span class="mi_hospitalservicetab">Cardiology</span>
				  <span class="mi_hospitalservicetab">Neurology</span>
				  <span class="mi_hospitalservicetab">Dermatology </span>
				  <span class="mi_hospitalservicetab">Urology  </span>
				  <span class="mi_hospitalservicetab">Liver Transplant   </span>
				   <span class="mi_hospitalservicetab">Orthopaedic.   </span>
			</div>
			
			<!--maxlimit5 and one is default show in front-->
			<div class="col-md-12 mi_hospitalgallery mt10 pull-left">
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click the the image to move forward.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt=""/>
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="The set is preloaded as you're viewing.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click or the X to the right to close.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			</div>
			  <div class="col-md-12 mi_filterbottom mt20  pull-left">
			  <a href="javascript:void(0)" class="mi_viewservice"> View all Services </a>
			  <span class="mi_hospitalsuggested"> <i class="micheckicon"></i> Suggest By Mi consulting</span>
			  </div>
	  
	  </div>
	  <div class="mi_hospitalinformation"> 
			<div class="mi_hospitalinformationbox"> <i class="mi_chaticon"></i> <div class="mi_hospitalinformationbox-in">27 Feedback</div> </div>
			<div class="mi_hospitalinformationbox"> <i class="mi_timeicon"></i> <div class="mi_hospitalinformationbox-in">Mon - Sat <br/>
                    8:30am to 1:30pm ,  5:00pm to 8:00pm </div></div>
			<div class="mi_hospitalinformationbox"> <i class="mi_addressicon"></i> <div class="mi_hospitalinformationbox-in">Tower A, Unitech Business Park,
               Block - F, South City 1, Sector - 41 </div></div>
			<div class="mi_hospitalinformationbox text-center">   
		      <button class="btn btn-outline-grey ripplegrey mt10 ">Book Appointment</button>
	        </div>
	  </div>
   </div>
   
   
   <div class="mi_filterdatabox mi-lt-grey mb10 wow fadeInUp">
      <div class="mi-hospitalimage"> 
	  <img src="<?php echo base_url(); ?>assets/images/appolo.jpg" class="img-responsive">
	  </div>
	  <div class="mi-hospitaldetails pl0"> 
	     
		    <div class="col-md-10  col-sm-10 col-xs-10">
			 <span class="mi_filtertitle">Appollo in Delhi</span>
			 <span class="mi_doctortype">1 Dentist , 2 Cosmetict </span>
			</div>
            <div class="col-md-2 col-sm-2 col-xs-2">
			<img src="<?php echo base_url(); ?>assets/images/hospital-logo/appolo.png" class="img-responsive">
			</div>
            <div class="col-md-12 mi_hospitalservices mt5 pull-left">
                  <span class="mi_hospitalservicetab">Cardiology</span>
				  <span class="mi_hospitalservicetab">Neurology</span>
				  <span class="mi_hospitalservicetab">Dermatology </span>
				  <span class="mi_hospitalservicetab">Urology  </span>
				  <span class="mi_hospitalservicetab">Liver Transplant   </span>
				   <span class="mi_hospitalservicetab">Orthopaedic.   </span>
			</div>
			
			<!--maxlimit5 and one is default show in front-->
			<div class="col-md-12 mi_hospitalgallery mt10 pull-left">
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click the the image to move forward.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt=""/>
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="The set is preloaded as you're viewing.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click or the X to the right to close.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			</div>
			  <div class="col-md-12 mi_filterbottom mt20  pull-left">
			  <a href="javascript:void(0)" class="mi_viewservice"> View all Services </a>
			  <span class="mi_hospitalsuggested"> <i class="micheckicon"></i> Suggest By Mi consulting</span>
			  </div>
	  
	  </div>
	  <div class="mi_hospitalinformation"> 
		
			<div class="mi_hospitalinformationbox"> <i class="mi_chaticon"></i> <div class="mi_hospitalinformationbox-in">27 Feedback</div> </div>
			<div class="mi_hospitalinformationbox"> <i class="mi_timeicon"></i> <div class="mi_hospitalinformationbox-in">Mon - Sat <br/>
                    8:30am to 1:30pm ,  5:00pm to 8:00pm </div></div>
			<div class="mi_hospitalinformationbox"> <i class="mi_addressicon"></i> <div class="mi_hospitalinformationbox-in">Tower A, Unitech Business Park,
               Block - F, South City 1, Sector - 41 </div></div>
			<div class="mi_hospitalinformationbox text-center">   
		      <button class="btn btn-outline-grey ripplegrey mt10 ">Book Appointment</button>
	        </div>
	  </div>
   </div>
   
   
   <div class="mi_filterdatabox mi-lt-grey mb10 wow fadeInUp">
      <div class="mi-hospitalimage"> 
	  <img src="<?php echo base_url(); ?>assets/images/appolo.jpg" class="img-responsive">
	  </div>
	  <div class="mi-hospitaldetails pl0"> 
	     
		    <div class="col-md-10  col-sm-10 col-xs-10">
			 <span class="mi_filtertitle">Appollo in Delhi</span>
			 <span class="mi_doctortype">1 Dentist , 2 Cosmetict </span>
			</div>
            <div class="col-md-2 col-sm-2 col-xs-2">
			<img src="<?php echo base_url(); ?>assets/images/hospital-logo/appolo.png" class="img-responsive">
			</div>
            <div class="col-md-12 mi_hospitalservices mt5 pull-left">
                  <span class="mi_hospitalservicetab">Cardiology</span>
				  <span class="mi_hospitalservicetab">Neurology</span>
				  <span class="mi_hospitalservicetab">Dermatology </span>
				  <span class="mi_hospitalservicetab">Urology  </span>
				  <span class="mi_hospitalservicetab">Liver Transplant   </span>
				   <span class="mi_hospitalservicetab">Orthopaedic.   </span>
			</div>
			
			<!--maxlimit5 and one is default show in front-->
			<div class="col-md-12 mi_hospitalgallery mt10 pull-left">
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click the the image to move forward.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt=""/>
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="The set is preloaded as you're viewing.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click or the X to the right to close.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			</div>
			  <div class="col-md-12 mi_filterbottom mt20  pull-left">
			  <a href="javascript:void(0)" class="mi_viewservice"> View all Services </a>
			  <span class="mi_hospitalsuggested"> <i class="micheckicon"></i> Suggest By Mi consulting</span>
			  </div>
	  
	  </div>
	  <div class="mi_hospitalinformation"> 
		
			<div class="mi_hospitalinformationbox"> <i class="mi_chaticon"></i> <div class="mi_hospitalinformationbox-in">27 Feedback</div> </div>
			<div class="mi_hospitalinformationbox"> <i class="mi_timeicon"></i> <div class="mi_hospitalinformationbox-in">Mon - Sat <br/>
                    8:30am to 1:30pm ,  5:00pm to 8:00pm </div></div>
			<div class="mi_hospitalinformationbox"> <i class="mi_addressicon"></i> <div class="mi_hospitalinformationbox-in">Tower A, Unitech Business Park,
               Block - F, South City 1, Sector - 41 </div></div>
			<div class="mi_hospitalinformationbox text-center">   
		      <button class="btn btn-outline-grey ripplegrey mt10 ">Book Appointment</button>
	        </div>
	  </div>
   </div>
   
   
   <div class="mi_filterdatabox mi-lt-grey mb10 wow fadeInUp">
      <div class="mi-hospitalimage"> 
	  <img src="<?php echo base_url(); ?>assets/images/appolo.jpg" class="img-responsive">
	  </div>
	  <div class="mi-hospitaldetails pl0"> 
	     
		    <div class="col-md-10  col-sm-10 col-xs-10">
			 <span class="mi_filtertitle">Appollo in Delhi</span>
			 <span class="mi_doctortype">1 Dentist , 2 Cosmetict </span>
			</div>
            <div class="col-md-2 col-sm-2 col-xs-2">
			<img src="<?php echo base_url(); ?>assets/images/hospital-logo/appolo.png" class="img-responsive">
			</div>
            <div class="col-md-12 mi_hospitalservices mt5 pull-left">
                  <span class="mi_hospitalservicetab">Cardiology</span>
				  <span class="mi_hospitalservicetab">Neurology</span>
				  <span class="mi_hospitalservicetab">Dermatology </span>
				  <span class="mi_hospitalservicetab">Urology  </span>
				  <span class="mi_hospitalservicetab">Liver Transplant   </span>
				   <span class="mi_hospitalservicetab">Orthopaedic.   </span>
			</div>
			
			<!--maxlimit5 and one is default show in front-->
			<div class="col-md-12 mi_hospitalgallery mt10 pull-left">
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click the the image to move forward.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt=""/>
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="The set is preloaded as you're viewing.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click or the X to the right to close.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			</div>
			  <div class="col-md-12 mi_filterbottom mt20  pull-left">
			  <a href="javascript:void(0)" class="mi_viewservice"> View all Services </a>
			  <span class="mi_hospitalsuggested"> <i class="micheckicon"></i> Suggest By Mi consulting</span>
			  </div>
	  
	  </div>
	  <div class="mi_hospitalinformation"> 
		
			<div class="mi_hospitalinformationbox"> <i class="mi_chaticon"></i> <div class="mi_hospitalinformationbox-in">27 Feedback</div> </div>
			<div class="mi_hospitalinformationbox"> <i class="mi_timeicon"></i> <div class="mi_hospitalinformationbox-in">Mon - Sat <br/>
                    8:30am to 1:30pm ,  5:00pm to 8:00pm </div></div>
			<div class="mi_hospitalinformationbox"> <i class="mi_addressicon"></i> <div class="mi_hospitalinformationbox-in">Tower A, Unitech Business Park,
               Block - F, South City 1, Sector - 41 </div></div>
			<div class="mi_hospitalinformationbox text-center">   
		      <button class="btn btn-outline-grey ripplegrey mt10 ">Book Appointment</button>
	        </div>
	  </div>
   </div>
   
    <div class="mi_filterdatabox mi-lt-grey mb10 wow fadeInUp">
      <div class="mi-hospitalimage"> 
	  <img src="<?php echo base_url(); ?>assets/images/appolo.jpg" class="img-responsive">
	  </div>
	  <div class="mi-hospitaldetails pl0"> 
	     
		    <div class="col-md-10  col-sm-10 col-xs-10">
			 <span class="mi_filtertitle">Appollo in Delhi</span>
			 <span class="mi_doctortype">1 Dentist , 2 Cosmetict </span>
			</div>
            <div class="col-md-2 col-sm-2 col-xs-2">
			<img src="<?php echo base_url(); ?>assets/images/hospital-logo/appolo.png" class="img-responsive">
			</div>
            <div class="col-md-12 mi_hospitalservices mt5 pull-left">
                  <span class="mi_hospitalservicetab">Cardiology</span>
				  <span class="mi_hospitalservicetab">Neurology</span>
				  <span class="mi_hospitalservicetab">Dermatology </span>
				  <span class="mi_hospitalservicetab">Urology  </span>
				  <span class="mi_hospitalservicetab">Liver Transplant   </span>
				   <span class="mi_hospitalservicetab">Orthopaedic.   </span>
			</div>
			
			<!--maxlimit5 and one is default show in front-->
			<div class="col-md-12 mi_hospitalgallery mt10 pull-left">
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click the the image to move forward.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt=""/>
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="The set is preloaded as you're viewing.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			  <a class="example-image-link" href="<?php echo base_url(); ?>assets/images/appolo.jpg" data-lightbox="example-set" data-title="Click or the X to the right to close.">
			  <img class="example-image" src="<?php echo base_url(); ?>assets/images/appolo.jpg" alt="" />
			  </a>
			</div>
			  <div class="col-md-12 mi_filterbottom mt20  pull-left">
			  <a href="javascript:void(0)" class="mi_viewservice"> View all Services </a>
			  <span class="mi_hospitalsuggested"> <i class="micheckicon"></i> Suggest By Mi consulting</span>
			  </div>
	  
	  </div>
	  <div class="mi_hospitalinformation"> 
		
			<div class="mi_hospitalinformationbox"> <i class="mi_chaticon"></i> <div class="mi_hospitalinformationbox-in">27 Feedback</div> </div>
			<div class="mi_hospitalinformationbox"> <i class="mi_timeicon"></i> <div class="mi_hospitalinformationbox-in">Mon - Sat <br/>
                    8:30am to 1:30pm ,  5:00pm to 8:00pm </div></div>
			<div class="mi_hospitalinformationbox"> <i class="mi_addressicon"></i> <div class="mi_hospitalinformationbox-in">Tower A, Unitech Business Park,
               Block - F, South City 1, Sector - 41 </div></div>
			<div class="mi_hospitalinformationbox text-center">   
		      <button class="btn btn-outline-grey ripplegrey mt10 ">Book Appointment</button>
	        </div>
	  </div>
   </div>
   
   
   
   
   
   
   
   
   
   
   
   <div class="col-md-12 col-md-12 col-md-12 text-center">
   <ul class="pagination mi-pagination">
    <li><a href="#"><i class="mi_leftarrow"></i></a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#"><i class="mi_rightarrow"></i></a></li>
  </ul>
   </div>
   
</div>






</div>
<!---<div class="mi_filterresult col-md-9 col-sm-9 col-xs-12">
<div class="row">
	<div class="mi_doctorbook col-md-12">
       <div class="mi_doctortimeslot">
           <div class="mi_date mi-lt-grey pt10 pb10">
		     <ul class="nav nav-tabs" role="tablist">
			   <li role="presentation" class="active"><a  href="#date1" aria-controls="date1" role="tab" data-toggle="tab"><strong>7</strong><span>Feb</br>Tuesday</span></a> </li>
			   <li role="presentation" ><a href="#date2" aria-controls="date2"  role="tab" data-toggle="tab"><strong>8</strong><span>Feb</br> Wednesday </span></a></li>
			   <li role="presentation" ><a href="#date3" aria-controls="date3"  role="tab" data-toggle="tab"> <strong>9</strong><span>Feb</br>Tursday</span></a> </li>
			   <li role="presentation" ><a href="#date4" aria-controls="date4"  role="tab" data-toggle="tab"><strong>10</strong><span>Feb</br>  Friday</span></a></li>
			   <li role="presentation" ><a href="#date5" aria-controls="date5"  role="tab" data-toggle="tab"><strong>11</strong><span>Feb</br>Saturday</span></a></li>
			 </ul>
		   </div>
	     <div class="mi_doctortimes tab-content">
		     <div class="mi_doctortimeslotmain tab-pane active" role="tabpanel"  id="date1">
			 
		       <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_morningicon"></span> Morning</div>
			   <div class="mi_tabcontentime">10:15 AM</div>
			   <div class="mi_tabcontentime">10:30 AM</div>
			   <div class="mi_tabcontentime">10:45 AM</div>
			   <div class="mi_tabcontentime">11:00 AM</div>
			   <div class="mi_tabcontentime">11:15 AM</div>
			   <div class="mi_tabcontentime">11:30 AM</div>
			   <div class="mi_tabcontentime">11:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
			   <div class="mi_tabcontentime">12:00 PM</div>
			   <div class="mi_tabcontentime">12:15 PM</div>
			   <div class="mi_tabcontentime">12:30 AM</div>
			   <div class="mi_tabcontentime">12:45 AM</div>
			   <div class="mi_tabcontentime">01:00 AM</div>
			   <div class="mi_tabcontentime">01:15 AM</div>
			   <div class="mi_tabcontentime">01:30 AM</div>
			   <div class="mi_tabcontentime">01:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
			   <div class="mi_tabcontentime">05:00 PM</div>
			   <div class="mi_tabcontentime">05:15 PM</div>
			   <div class="mi_tabcontentime">05:30 PM</div>
			   <div class="mi_tabcontentime">05:45 PM</div>
			   <div class="mi_tabcontentime">06:00 PM</div>
			   <div class="mi_tabcontentime">06:15 PM</div>
			   <div class="mi_tabcontentime">06:30 PM</div>
			   <div class="mi_tabcontentime">06:45 PM</div>
			   <div class="mi_tabcontentime">07:00 PM</div>
			   <div class="mi_tabcontentime">07:15 PM</div>
			   <div class="mi_tabcontentime">07:30 PM</div>
			   <div class="mi_tabcontentime">07:45 PM</div>
			   </div>
		     </div>
			  <div class="mi_doctortimeslotmain tab-pane" role="tabpanel"  id="date2">
			 
		       <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_morningicon"></span> Morning1</div>
			   <div class="mi_tabcontentime">10:15 AM</div>
			   <div class="mi_tabcontentime">10:30 AM</div>
			   <div class="mi_tabcontentime">10:45 AM</div>
			   <div class="mi_tabcontentime">11:00 AM</div>
			   <div class="mi_tabcontentime">11:15 AM</div>
			   <div class="mi_tabcontentime">11:30 AM</div>
			   <div class="mi_tabcontentime">11:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
			   <div class="mi_tabcontentime">12:00 PM</div>
			   <div class="mi_tabcontentime">12:15 PM</div>
			   <div class="mi_tabcontentime">12:30 AM</div>
			   <div class="mi_tabcontentime">12:45 AM</div>
			   <div class="mi_tabcontentime">01:00 AM</div>
			   <div class="mi_tabcontentime">01:15 AM</div>
			   <div class="mi_tabcontentime">01:30 AM</div>
			   <div class="mi_tabcontentime">01:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
			   <div class="mi_tabcontentime">05:00 PM</div>
			   <div class="mi_tabcontentime">05:15 PM</div>
			   <div class="mi_tabcontentime">05:30 PM</div>
			   <div class="mi_tabcontentime">05:45 PM</div>
			   <div class="mi_tabcontentime">06:00 PM</div>
			   <div class="mi_tabcontentime">06:15 PM</div>
			   <div class="mi_tabcontentime">06:30 PM</div>
			   <div class="mi_tabcontentime">06:45 PM</div>
			   <div class="mi_tabcontentime">07:00 PM</div>
			   <div class="mi_tabcontentime">07:15 PM</div>
			   <div class="mi_tabcontentime">07:30 PM</div>
			   <div class="mi_tabcontentime">07:45 PM</div>
			   </div>
		     </div>
			  <div class="mi_doctortimeslotmain tab-pane" role="tabpanel"  id="date3">
			 
		       <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_morningicon"></span> Morning</div>
			   <div class="mi_tabcontentime">10:15 AM</div>
			   <div class="mi_tabcontentime">10:30 AM</div>
			   <div class="mi_tabcontentime">10:45 AM</div>
			   <div class="mi_tabcontentime">11:00 AM</div>
			   <div class="mi_tabcontentime">11:15 AM</div>
			   <div class="mi_tabcontentime">11:30 AM</div>
			   <div class="mi_tabcontentime">11:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
			   <div class="mi_tabcontentime">12:00 PM</div>
			   <div class="mi_tabcontentime">12:15 PM</div>
			   <div class="mi_tabcontentime">12:30 AM</div>
			   <div class="mi_tabcontentime">12:45 AM</div>
			   <div class="mi_tabcontentime">01:00 AM</div>
			   <div class="mi_tabcontentime">01:15 AM</div>
			   <div class="mi_tabcontentime">01:30 AM</div>
			   <div class="mi_tabcontentime">01:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
			   <div class="mi_tabcontentime">05:00 PM</div>
			   <div class="mi_tabcontentime">05:15 PM</div>
			   <div class="mi_tabcontentime">05:30 PM</div>
			   <div class="mi_tabcontentime">05:45 PM</div>
			   <div class="mi_tabcontentime">06:00 PM</div>
			   <div class="mi_tabcontentime">06:15 PM</div>
			   <div class="mi_tabcontentime">06:30 PM</div>
			   <div class="mi_tabcontentime">06:45 PM</div>
			   <div class="mi_tabcontentime">07:00 PM</div>
			   <div class="mi_tabcontentime">07:15 PM</div>
			   <div class="mi_tabcontentime">07:30 PM</div>
			   <div class="mi_tabcontentime">07:45 PM</div>
			   </div>
		     </div>
			  <div class="mi_doctortimeslotmain tab-pane" role="tabpanel"  id="date4">
			 
		       <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_morningicon"></span> Morning</div>
			   <div class="mi_tabcontentime">10:15 AM</div>
			   <div class="mi_tabcontentime">10:30 AM</div>
			   <div class="mi_tabcontentime">10:45 AM</div>
			   <div class="mi_tabcontentime">11:00 AM</div>
			   <div class="mi_tabcontentime">11:15 AM</div>
			   <div class="mi_tabcontentime">11:30 AM</div>
			   <div class="mi_tabcontentime">11:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_afternoonicon"></span> Afternoon</div>
			   <div class="mi_tabcontentime">12:00 PM</div>
			   <div class="mi_tabcontentime">12:15 PM</div>
			   <div class="mi_tabcontentime">12:30 AM</div>
			   <div class="mi_tabcontentime">12:45 AM</div>
			   <div class="mi_tabcontentime">01:00 AM</div>
			   <div class="mi_tabcontentime">01:15 AM</div>
			   <div class="mi_tabcontentime">01:30 AM</div>
			   <div class="mi_tabcontentime">01:45 AM</div>
			   </div>
			   <div class="mi_doctortimeslotmainbox">
			   <div class="mi_timetab"><span class="mi_eveningicon"></span> Evening</div>
			   <div class="mi_tabcontentime">05:00 PM</div>
			   <div class="mi_tabcontentime">05:15 PM</div>
			   <div class="mi_tabcontentime">05:30 PM</div>
			   <div class="mi_tabcontentime">05:45 PM</div>
			   <div class="mi_tabcontentime">06:00 PM</div>
			   <div class="mi_tabcontentime">06:15 PM</div>
			   <div class="mi_tabcontentime">06:30 PM</div>
			   <div class="mi_tabcontentime">06:45 PM</div>
			   <div class="mi_tabcontentime">07:00 PM</div>
			   <div class="mi_tabcontentime">07:15 PM</div>
			   <div class="mi_tabcontentime">07:30 PM</div>
			   <div class="mi_tabcontentime">07:45 PM</div>
			   </div>
		     </div>
		 </div>
      
         <div class="mi_pagination">
		     <div class="mi_prev"><a href="javascript:void(0)"></a></div>
		     <div class="mi_nxt"><a href="javascript:void(0)"></a></div>
		 </div>
	  </div>
	</div>
</div>
</div>-->
</div>
</div>
</section>
<div class="transparent-bg"></div>




























