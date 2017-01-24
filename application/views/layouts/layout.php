<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en-US" class=" html_stretched responsive av-preloader-disabled av-default-lightbox  html_header_top html_logo_left html_main_nav_header html_menu_right html_slim html_header_sticky html_header_shrinking html_mobile_menu_phone html_disabled html_header_searchicon_disabled html_content_align_center html_header_unstick_top_disabled html_header_stretch_disabled html_entry_id_2 ">
    <head>
        <title><?php echo $template['title']; ?></title>
        <?php echo $template['metadata']; ?>
    </head>
    <?php include_once 'header.php'; ?>
    <body id="top" class="home page page-id-2 page-template-default logged-in stretched open_sans " itemscope="itemscope" itemtype="https://schema.org/WebPage" >
        <div id='wrap_all'>
            <h1><?php echo $template['title']; ?></h1>
            <?php include_once 'nab.php'; ?>
            <?php echo $template['body']; ?>
        </div>
        <?php include_once 'footer.php'; ?>

    </body>
</html>
