<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!-- meta keywords specific to the page -->
        {_meta}
		<!-- page title specific to the page -->
        <title>{title}</title>
        <!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
		<!-- template style -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/template.css"/>
		<!-- other style sheet -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/other.css"/>
		<!-- js file -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
		<!-- style sheets specific to the page -->
        {_styles}
		<!-- js files specific to the page -->
        {_scripts}
    </head>
    <body>
        <div id='headerpic-wrapper'>
            <div class='clearfix' id='topnav'>
                <div class='menu-topnav-container'>
                    <ul class='menu' id='menu-topnav'>
                            <li><a href=''>Signin</a></li>
                            <li><a href=''>Signup</a></li>
                            <li><a class='trigger' href='#'>My Activities</a>
                                <ul>
                                    <li>
                                        <a href=''>My Feedback</a>
                                    </li>
                                    <li>
                                        <a href=''>My Blogs</a>
                                    </li>
                                    <li>
                                        <a href=''>Post Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class='trigger' href=''>Account</a>
                                <ul>
                                    <li>
                                        <a href=''>Change Email</a>
                                    </li>
                                    <li>
                                        <a href=''>Change Password</a>
                                    </li>
                                </ul>
                        </li>
                        <li><a href=''>Singout</a></li>
                        <li><a class='trigger' href='#'>Find Us</a>
                            <ul>
                                <li><a href='#'>Facebook</a></li>
                                <li><a href='#'>Twitter</a></li>
                                <li><a href='#'>Google +</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- end header-wrapper -->
        <div id='menuwrapperpic'>
            <div id='menuwrapper'>
                <ul id='menubar'>
                    <li><a href=''><img border='0' src='assets/img/template/home_white.png' style='padding:0px;'/></a></li>
                    <li><a class='trigger' href=''>Interview FAQs</a>
                        <ul>
                            <li><a href=''>Category 1</a></li>
							<li><a href=''>Category 2</a></li>
							<li><a href=''>Category 3</a></li>
                        </ul>
                    </li>
                    <li><a href=''>About</a></li>
                    <li><a href=''>Contact</a></li>
                </ul>
                <br class='clearit'/>
            </div>
        </div>
        <div class='clearfix' id='page'>
            <div class='maincontent' id='contentleft'>
                <p id='breadcrumbs'>
                    
                </p>                
                <div class='posts-by-3'>
                    <div class='main section' id='main'>
						<!-- content specific to the page -->
                        {content}
                    </div>
                    <div style='clear: both;'></div>
                </div>
            </div>
            <div id='sidebar-wrapper'>
                <div class='sidebar section' id='sidebar'>
                    <div class='widget PopularPosts' id='PopularPosts1'>
                        <h2>Popular Posts</h2>
                        <div class='widget-content popular-posts'>
                            <ul>
                                
                            </ul>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class='widget LinkList' id='LinkList1'>
                        <h2>Recent Posts</h2>
                        <div class='widget-content'>
                            <ul>
                                
                            </ul>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both;" id="footer">
            <a href=''>www.roytuts.com</a> &#169; 2012 - <?php echo date('Y'); ?> | Designed by <a href=''>Soumitra Sarkar</a> | <a href=''>Privacy</a> | <a href=''>Terms &amp; Conditions</a>
        </div>        
    </body>
</html>