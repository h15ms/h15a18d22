<div id='main' data-scroll-offset='88'>


  <div id='after_layer_slider_1' class='main_color container_wrap fullsize'>
    <div class='container'>
      <div class='template-page content  av-content-full alpha units'>
        <div class='post-entry post-entry-type-page post-entry-11'>
          <div class='entry-content-wrapper clearfix'>
            
          <?php if($result == "1"){ ?>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;
                  </span>
                </button>
                <i class="fa fa-exclamation-triangle"></i> 
                <b>Your profile has been saved successfully</b>
              </div>
            </div>  
          </div>  
          <?php }else{ ?>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;
                  </span>
                </button>
                <i class="fa fa-exclamation-triangle"></i> 
                <b>Some problems occured, Try again! </b>
              </div>
            </div>  
          </div>
          <?php } ?>

            <section class="avia_codeblock_section avia_code_block_0"  itemscope="itemscope" itemtype="https://schema.org/CreativeWork" >
              <div class='avia_codeblock '  itemprop="text"> <h3>Edit your Details</h3></div>
              
              <form action="user/edit_user" method="POST" class="form-horizontal" style="margin-top: 20px" role="form">              
                <div class="form-group">
                  <p class="col-md-1">First Name</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="firstname" value="<?php echo $firstname; ?>" id="" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group">
                  <p class="col-md-1">Last Name</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="lastname" value="<?php echo $lastname; ?>" id="" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <p class="col-md-1">Street</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="street" value="<?php echo $street; ?>" id="" placeholder="Street">
                  </div>
                </div>
                <div class="form-group">
                  <p class="col-md-1">Zip</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="zip" value="<?php echo $zip; ?>" id="" placeholder="Zip">
                  </div>
                </div>
                <div class="form-group">
                  <p class="col-md-1">City</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="city" value="<?php echo $city; ?>" id="" placeholder="City">
                  </div>
                </div>
                <div class="form-group">
                  <p class="col-md-1">State</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="state" value="<?php echo $state; ?>" id="" placeholder="State">
                  </div>
                </div>
                 <div class="form-group">
                  <p class="col-md-1">Country</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="country" value="<?php echo $country; ?>" id="" placeholder="Country">
                  </div>
                </div>
                 <div class="form-group">
                  <p class="col-md-1">Email</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="email" value="<?php echo $email; ?>" id="" placeholder="Email">
                  </div>
                </div>
                 <div class="form-group">
                  <p class="col-md-1">Phone</p>
                  <div class="col-md-11">
                    <input type="text" class="form-control col-md-8" name="phone" value="<?php echo $phone; ?>" id="" placeholder="Phone">
                  </div>
                </div>
                 <div class="form-group">
                  <p class="col-md-1">Avatar</p>
                  <div class="col-md-11">
                    <input type="file" class="form-control col-md-8" name="avatar">
                  </div>
                </div>
                              
              
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
