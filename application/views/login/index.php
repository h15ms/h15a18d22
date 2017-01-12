<style>
  .footer{
    display:none;
  }
</style>
<div class="wrap">
  <div class="wrapper">
    <!-- wrap start -->
    <div class="container-fluid" id="overview" style="height:520%; background-image: url('assets/img/bg-home2.jpg');">    
      <div class="container" style="margin-top:16%;">
        <!--div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom:40px;">
        <h2 style="font-weight:100;">Welcome to Premiumleasing</h2>        
        </div-->
        <?php if($err == "1"){ ?>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;
                </span>
              </button>
              <i class="fa fa-exclamation-triangle">
              </i> 
              <b>The user does not exist</b>
            </div>
          </div>  
        </div>  
        <?php } ?>
        <?php if($err == "2"){ ?>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;
                </span>
              </button>
              <i class="fa fa-exclamation-triangle"></i> 
              <b>Wrong Password</b>
            </div>
          </div>  
        </div>  
        <?php } ?>
        <?php if($err == "3"){ ?>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;
                </span>
              </button>
              <i class="fa fa-exclamation-triangle"></i> 
              <b>Your account has been locked</b>
            </div>
          </div>  
        </div>  
        <?php } ?>
        <?php if($reg == "1"){ ?>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;
                </span>
              </button>
              <i class="fa fa-exclamation-triangle"></i> 
              <b>There is already an account with this email address provided</b>
            </div>
          </div>  
        </div>  
        <?php } ?>
        <?php if($reg == "2"){ ?>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;
                </span>
              </button>
              <i class="fa fa-exclamation-triangle"></i> 
              <b>Interal problems, please try again later.</b>
            </div>
          </div>  
        </div>  
        <?php } ?>
        <?php if($reg == "3"){ ?>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:40px;padding-right:40px;">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;
                </span>
              </button>
              <i class="fa fa-check-circle-o">
              </i> 
              <b>Thank you for sign up.
              </b>
              <p>We send you now a email with a confirm link. For to confirm your email address.
              </p>
            </div>
          </div>  
        </div>  
        <?php } ?>
        <style type="text/css">
          div.test1 
          {
            padding-bottom: 30px;
            padding-top: 10px;
            margin-bottom:130px;
            box-shadow: rgba(0,0,0, 0.3) 0px 0px 4px;
            -moz-box-shadow: rgba(0,0,0, 0.3) 0px 0px 4px;
            -webkit-box-shadow: rgba(0,0,0, 0.3) 0px 0px 4px;
          }
        </style>
        

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="col-md-10 col-md-offset-1 test1" style="text-align:center;background:rgba(255,255,255,1.0);">
            <h2 style="font-weight:100;color:#0084d0;margin:20px 0 60px 0;">
              <i class="fa fa-sign-in"></i> Sign In
            </h2>
            <form action="" method="post">
              <input type="hidden" name="send" value="signin">
              <input type="email" name="username" value="" placeholder="Email address" class="form-control input-lg" required>
              <input type="password" name="pass" value="" placeholder="Password" class="form-control input-lg" style="margin-top:10px;" required>
              <p style="text-align:left;margin:30px 0 40px 0;">
                <a href="" class="text-primary">
                  <small>Forgot Password?</small>
                </a>
              </p>
              <button type="submit" class="btn btn-primary btn-lg btn-block">SIGN IN</button>
            </form>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">        
          <div class="col-md-10 col-md-offset-1 test1" style="text-align:center;background:rgba(255,255,255,1.0);">
            <h2 style="font-weight:100;color:#0084d0;margin:20px 0 30px 0;">
              <i class="fa fa-user">
              </i> Create an account
            </h2>                    
            <form action="" method="post">
              <input type="hidden" name="send" value="signup">
              <input type="text" name="firstname" value="" placeholder="First Name" class="form-control input-lg" required>
              <input type="text" name="lastname" value="" placeholder="Last Name" class="form-control input-lg" style="margin-top:10px;" required>                     
              <input type="email" name="email" value="" placeholder="Email Address" class="form-control input-lg" style="margin-top:10px;" required>
                  <!--input type="password" name="password" value="" placeholder="Password" class="form-control" style="margin-top:10px;">
                <input type="password" name="password_agian" value="" placeholder="Type your password agian" class="form-control" style="margin-top:10px;">
                <p style="text-align:left;margin-top:10px;"><small>Minimum of eight characters</small></p>
                <p style="text-align:left;margin-top:10px;"><label><input type="checkbox" name="newsletter"> I want updates and news of Premiumleasing</label></p-->
              <p style="margin-top:10px;">
                <label for="terms">
                  <input type="checkbox" id="terms" name="terms" value="1"> I accept the Terms and Condition of Ngine
                </label>
              </p>
              <button type="submit" class="btn btn-primary btn-lg btn-block">SIGN UP
              </button>
            </form>
          </div>
        </div>

      </div> 
      <!-- container -->
    </div> 
    <!-- wrapper -->
  </div> 
  <!-- wrap -->
</div> 
<!-- wrap -->
