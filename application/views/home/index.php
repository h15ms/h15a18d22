<section class="mi-cl">
  <div class="banner">
    <ul class="rslides" id="slider1">
      <li><img src="<?php echo base_url(); ?>assets/images/1.jpg" alt=""></li>
      <li><img src="<?php echo base_url(); ?>assets/images/2.jpg" alt=""></li>
      <li><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt=""></li>
      <li><img src="<?php echo base_url(); ?>assets/images/4.jpg" alt=""></li>
    </ul>
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mi-multitab"> 
            <!-- Nav tabs -->
            <div class="tabbox">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#hospital" aria-controls="Hospital"><i class="iconhospital tabiconnone"></i><span class="mhide">Hospital</span></a></li>
                <li role="presentation"><a href="#vissa"  aria-controls="Vissa" ><i class="iconvissa tabiconnone"></i><span class="mhide">Vissa</span></a></li>
                <li role="presentation"><a href="#flight" aria-controls="Flight"><i class="iconflight tabiconnone"></i><span class="mhide">Flight</span></a></li>
                <li role="presentation"><a href="#hotels" aria-controls="Hotels" ><i class="iconhotels tabiconnone"></i><span class="mhide">Hotels</span></a></li>
                <li role="presentation"><a href="#car_buses" aria-controls="Car/Buses"><i class="iconcarbuses tabiconnone"></i><span class="mhide">Car/Buses</span></a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="hospital">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mi-cl" >
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mt30 ">
        <h1>Find the Healthcare providers</h1>
      </div>
    </div>
    <div class="row mi-findcategory mt50 ">
      <div class="col-md-3 col-sm-3 col-xs-6 text-center"> <a href="#">
        <div class="mi-catser"> <img src="<?php echo base_url(); ?>assets/images/doctor.png" alt="Doctor"> </div>
        <div class="mi-cattitle mt10">Doctor</div>
        </a> </div>
      <div class="col-md-3 col-sm-3 col-xs-6 text-center"> <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
        <div class="mi-catser"> <img src="<?php echo base_url(); ?>assets/images/clinic.png" alt="Clinic"> </div>
        <div class="mi-cattitle mt10">Clinic</div>
        </a> </div>
      <div class="col-md-3 col-sm-3 col-xs-6 text-center"> <a href="#">
        <div class="mi-catser"> <img src="<?php echo base_url(); ?>assets/images/treatments.png" alt="Treatments"> </div>
        <div class="mi-cattitle mt10">Treatments</div>
        </a> </div>
      <div class="col-md-3 col-sm-3 col-xs-6 text-center"> <a href="#">
        <div class="mi-catser"> <img src="<?php echo base_url(); ?>assets/images/labs.png" alt="Labs"> </div>
        <div class="mi-cattitle mt10">Labs</div>
        </a> </div>
    </div>
  </div>
</section>
<section class="mi-cl mi-lt-grey mt50 pt20 pb50">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mt30">
        <h1>Specialities</h1>
      </div>
    </div>
    <div class="row mi-specialities mt50 ">
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/general-physician.png"  class="img-responsive img_auto">
        <div class="mi-cattitle mt10">General Physician</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/dermatology.png"  class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Dermatology</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/paediatrics.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Paediatrics</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/dentist.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Dentist</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/orthopaedics.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Orthopaedics</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/cardiology.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Cardiology</div>
        </a> </div>
    </div>
    <div class="row mi-specialities mt50 ">
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/physiotherapist.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Physiotherapist</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/pulmonology.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Pulmonology</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/gynaecology.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Gynaecology</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/urologist.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Urologist</div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/neurologist.png " class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Neurologist </div>
        </a> </div>
      <div class="col-md-2 col-sm-2 col-xs-6 mi-specialities-tab text-center"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/hospitals-specialities/gastroenterologist.png" class="img-responsive img_auto">
        <div class="mi-cattitle mt10">Gastroenterologist </div>
        </a> </div>
    </div>
    <div class="row mt50">
      <div class="col-md-12 text-center"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
    </div>
  </div>
</section>
<section class="mi-cl pt30 mb50">
  <div class="container">
    <div class="row">
      <h1>Popular Hospitals</h1>
    </div>
    <div class="row mt50">
      <div class="large-12 columns">
        <div class="owl-carousel owl-theme" id="popular-hospitals">
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk ">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="item">
            <div class="itemimage"> <img src="<?php echo base_url(); ?>assets/images/appolo.jpg"> </div>
            <div class="itemtitle text-center mt30 mb30"> Apollo Hospitals </div>
            <div class="itmebottom pt10 pb10">
              <div class="col-md-6 col-sm-6 col-xs-6 scheduleappoint"> Schedule an
                Appointment </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right"> <a href="#" class="btn btn-outline-grey rippleblk">See more</a> </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
