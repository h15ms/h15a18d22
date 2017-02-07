<?php 
define('URL_ADMIN', base_url() . 'assets/admin/'); 
define('ASSETS', base_url() . 'assets/');
?>
<!DOCTYPE html>
<html  data-ng-app="admin">
  <head>
    <meta charset="utf-8">
    <title>
      <?php echo $page_title ? $page_title : 'CRM'; ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cargusto.com">
    <meta name="author" content="Cargusto.com">
    <link rel="shortcut icon" href="assets/icon/favicon.png" />    
    <link rel="stylesheet" href="<?php echo URL_ADMIN;?>css/styles.css">
    <link rel="stylesheet" href="<?php echo URL_ADMIN;?>fonts/font-awesome/css/font-awesome.css">
    <link href='<?php echo URL_ADMIN;?>demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>     
    <link href='<?php echo URL_ADMIN;?>demo/variations/header-white.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>css/jquery.multiselect.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/fullcalendar/fullcalendar.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-markdown/css/bootstrap-markdown.min.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/codeprettifier/prettify.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-toggle/toggles.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/datatables/dataTables.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-select2/select2.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-multiselect/css/multi-select.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-fseditor/fseditor.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/form-tokenfield/bootstrap-tokenfield.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>js/jqueryui.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>css/print.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/jquery-fileupload/css/jquery.fileupload-ui.css' />
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link rel='stylesheet' type='text/css' href='<?php echo URL_ADMIN;?>plugins/dropzone/css/dropzone.css' />
    <script type='text/javascript' src='<?php echo URL_ADMIN ; ?>js/less.js'></script>
    


  </head>
  <body class="<?php //if (isset($_COOKIE["admin_leftbar_collapse"])) echo ($_COOKIE['admin_leftbar_collapse'] . " "); 
    // check collapse state with php
    // if (isset($_COOKIE["admin_rightbar_show"])) echo $_COOKIE['admin_rightbar_show'];
    // if (isset($_COOKIE["fixed-header"])) echo ' static-header';
                                    ?>">
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="">
      </a>
      <!--a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title=""></a-->
      <div class="navbar-header pull-left">
        <a class="navbar-brand" href="<?php echo base_url();?>admin/homecrm">
        </a>
      </div>
      <ul class="nav navbar-nav pull-right toolbar">                            
        <li class="dropdown">
          <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
            <span class="hidden-xs">
              <?php echo $_SESSION['logged_in']['user_name'];?> 
              <i class="fa fa-caret-down">
              </i>
            </span>
          </a>
          <ul class="dropdown-menu userinfo arrow">
            <li class="username">                       
              <a href="#">                                                                 
                <div class="pull-right">
                  <h5><?php echo $_SESSION['logged_in']['user_name'];?></h5>

                  <small>Signed In with <br><span><?php echo $_SESSION['logged_in']['user_email'];?></span>
                  </small>
                </div>
              </a>
            </li>
            <li class="userlinks">
              <ul class="dropdown-menu">                                                                                   
                <li>
                  <a href="<?php echo base_url();?>admin/usercrm/user/<?php echo $_SESSION['logged_in']['user_id']; ?>">Edit Profile 
                    <i class="pull-right fa fa-cog">
                    </i>
                  </a>
                </li>                                                                                       
                <li class="divider">
                <li>
                  <a href="<?php echo base_url();?>admin/Changepasscrm">Change Password 
                    <i class="pull-right fa fa-key">
                    </i>
                  </a>
                </li>                                                                                       
                <li class="divider">
                </li>
                <li>
                  <a href="<?php echo base_url();?>Login/logout" class="">Sign out 
                    <i class="pull-right fa fa-sign-out">
                    </i>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li> 
        <li>
          <a href="#" id="headerbardropdown">
            <span>
              <i class="fa fa-calendar-o">
              </i>  
              <?php  echo date("F j, Y"); ?>
            </span>
          </a>
        </li>                       
      </ul>
    </header>
    