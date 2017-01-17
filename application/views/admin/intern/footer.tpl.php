    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li><?php echo COPY;?></li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>

</div> <!-- page-container -->


<?php
function scripttag($address) {echo "<script type='text/javascript' src='$address'></script> \n";}

    //The following plugins are used for the functionality of the theme
    scripttag('assets/js/jquery.min.js');
    scripttag('assets/js/jqueryui-1.10.3.min.js');
    scripttag('assets/js/bootstrap.min.js');
    scripttag('assets/js/enquire.js');
    scripttag('assets/js/jquery.cookie.js');
    scripttag('assets/js/jquery.nicescroll.min.js');    
    scripttag('assets/js/request.js');    
        
    //Used in multiple places
    scripttag('assets/plugins/codeprettifier/prettify.js');     //Google Code Prettifier
    scripttag('assets/plugins/easypiechart/jquery.easypiechart.min.js');
    scripttag("assets/plugins/sparklines/jquery.sparklines.min.js");
    scripttag("assets/plugins/form-toggle/toggle.min.js");      // Toggle buttons \n ";

	// File Upload
    scripttag("assets/plugins/dropzone/dropzone.min.js");
		
    scripttag('assets/js/placeholdr.js');  //IE8 Placeholders
    scripttag('assets/js/application.js');
    scripttag('assets/demo/demo.js');
    
    scripttag("assets/plugins/datatables/jquery.dataTables.min.js");
    scripttag("assets/plugins/datatables/dataTables.bootstrap.js");
    scripttag("assets/demo/demo-datatables.php?c=".$_REQUEST['c']);

	scripttag("assets/plugins/fullcalendar/fullcalendar.min.js");
    scripttag("assets/plugins/form-daterangepicker/daterangepicker.min.js");
    scripttag("assets/plugins/form-daterangepicker/moment.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.resize.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.orderBars.min.js");
    scripttag("assets/plugins/pulsate/jQuery.pulsate.min.js");
    scripttag("assets/demo/demo-index.js");
    
    // Forms
    scripttag("assets/plugins/form-multiselect/js/jquery.multi-select.min.js");  // Multiselect Plugin \n ";
    scripttag("assets/plugins/quicksearch/jquery.quicksearch.min.js");           // Quicksearch to go with Multisearch Plugin \n ";
    scripttag("assets/plugins/form-typeahead/typeahead.min.js");                 // Typeahead for Autocomplete \n ";
    scripttag("assets/plugins/form-autosize/jquery.autosize-min.js");            // Autogrow Text Area\n ";
    scripttag("assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js");// Color Picker \n ";
    scripttag("assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js"); // Time Picker. Requires jQuery UI \n ";
    scripttag("assets/plugins/form-daterangepicker/daterangepicker.min.js");     // Date Range Picker \n ";
    scripttag("assets/plugins/form-datepicker/js/bootstrap-datepicker.js");      // Date Picker
    scripttag("assets/plugins/form-daterangepicker/moment.min.js");              // Moment.js for Date Range Picker \n ";
    scripttag("assets/plugins/form-ckeditor/ckeditor.js");                       // Fullscreen Editor \n ";
    scripttag("assets/plugins/form-jasnyupload/fileinput.min.js");               // File Input \n ";
    scripttag("assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js");     // Tokenfield \n ";
    scripttag("assets/demo/demo-formcomponents.js");
?>


</body>
</html>