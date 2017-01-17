<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ? $title : TITLE_DEFAULT; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cargusto.com">
	<meta name="author" content="Cargusto.com">
	<link rel="shortcut icon" href="assets/icon/favicon.png" />    
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">
    <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>     
    <link href='assets/demo/variations/header-white.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
   
<?php
function linktag($address) {echo "<link rel='stylesheet' type='text/css' href='$address' /> \n";}

    linktag('assets/plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    linktag('assets/plugins/fullcalendar/fullcalendar.css'); // <!-- Calendar -->
    linktag('assets/plugins/form-markdown/css/bootstrap-markdown.min.css');	
    linktag('assets/plugins/codeprettifier/prettify.css'); // <!-- Google Code Prettifier -->
    linktag('assets/plugins/form-toggle/toggles.css'); //<!-- Toggles -->
    linktag('assets/plugins/datatables/dataTables.css'); // <!-- Data Tables -->
    
    // Forms
    linktag('assets/plugins/form-select2/select2.css'); //<!-- Select2 -->
    linktag('assets/plugins/form-multiselect/css/multi-select.css'); //<!-- Multiselect -->
    linktag('assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css'); //<!-- jq UI Timepicker -->
    linktag('assets/plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    linktag('assets/plugins/form-fseditor/fseditor.css'); //<!-- FullScreen Editor -->
    linktag('assets/plugins/form-tokenfield/bootstrap-tokenfield.css'); //<!-- Tokenfield -->
    linktag('assets/js/jqueryui.css'); // <!-- jquery ui -->
    
    // print ankit
    linktag('assets/css/print.css'); // <!-- jquery ui -->
    
    // Bild upload
    linktag('assets/plugins/jquery-fileupload/css/jquery.fileupload-ui.css'); // <!--File Upload-->
    linktag('assets/plugins/dropzone/css/dropzone.css'); //<!-- Dropzone-->

?>
<script type="text/javascript" src="assets/js/less.js"></script>
</head>

<body class="<?php if (isset($_COOKIE["admin_leftbar_collapse"])) echo ($_COOKIE['admin_leftbar_collapse'] . " "); // check collapse state with php
                 if (isset($_COOKIE["admin_rightbar_show"])) echo $_COOKIE['admin_rightbar_show'];
                 if (isset($_COOKIE["fixed-header"])) echo ' static-header';
                ?>">

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title=""></a>
        <!--a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title=""></a-->

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.php"></a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">        	        	
        	<li class="dropdown">
        		<a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?php echo $user['vorname']." ".$user['nachname'];?> <i class="fa fa-caret-down"></i></span></a>
        		<ul class="dropdown-menu userinfo arrow">
        			<li class="username">                       
                        <a href="#">        				    
        				    <div class="pull-right"><h5><?php echo $user['vorname']." ".$user['nachname'];?></h5><small>Signed In with <span><?php echo $user['email'];?></span></small></div>
                        </a>
        			</li>
        			<li class="userlinks">
        				<ul class="dropdown-menu">        					
        					<li><a href="index.php?c=user&a=user&id=<?php echo $user['id'];?>">Edit Profile <i class="pull-right fa fa-cog"></i></a></li>
        					<li><a href="index.php?c=pwchange">Change Password <i class="pull-right fa fa-pencil"></i></a></li>        					
        					<li class="divider"></li>
        					<li><a href="index.php?c=login&a=logout" class="">Sign out <i class="pull-right fa fa-sign-out"></i></a></li>
        				</ul>
        			</li>
        		</ul>
        	</li> 
        	<li>
                <a href="#" id="headerbardropdown"><span><i class="fa fa-calendar-o"></i>  <?php echo date("F j, Y"); ?></span></a>
            </li>       	            
		</ul>
    </header>

    

    
    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li id="search">                    
                    <a href="javascript:;"><i class="fa fa-search opacity-control"></i></a>
                     <form action="index.php" method="get">                     
                     	<input type="hidden" value="applyprofil" name="c">
                        <input type="text" class="search-query" name="id" placeholder="Application #ID.">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>                
                <li><a href="index.php?c=apply"><i class="fa fa-file-text-o"></i> <span>Applies</span></a></li>                
                <?php if($user['userlevel']=="1"){ ?>                                                                 
                <li><a href="index.php?c=user"><i class="fa fa-group"></i> <span>Employees</span></a></li>    
                <?php } ?>
                                        
                <!--li class="divider"></li>
                <li><a href="javascript:;"><i class="fa fa-ticket"></i> <span>Support Tickets</span> </a>
                    <ul class="acc-menu">
                        <li><a href="index.php?c=tickets">Offene Tickets</a></li>
                        <li><a href="index.php?c=ticketsclose">Geschlossene Tickets</a></li>                        
                    </ul>
                </li-->                
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>

        <!-- BEGIN RIGHTBAR >
        <div id="page-rightbar">
            <div id="widgetarea">                
                <div class="widget" id="activities">                    
                    <p><span class="fa fa-user"></span> Benutzer Aktivitäten</p>                    
                </div>
            </div>
        </div>
        <- END RIGHTBAR -->