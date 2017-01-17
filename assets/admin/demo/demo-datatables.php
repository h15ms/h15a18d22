<?php  header('content-type: text/javascript; charset=utf-8'); ?>

// -------------------------------
// Initialize Data Tables
// -------------------------------

<?php  if($_GET['c']=="cars"){ ?>

$(document).ready(function() {
    $('.datatable').dataTable({
    	"iDisplayLength": 10,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",
        //"sAjaxSource": '',
        "aaSorting": [[0, 'desc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": false },
    		{ "sClass": "left", "bSortable": true },            		
    		{ "sClass": "left hidden-xs", "bSortable": true },
    		{ "sClass": "left hidden-xs", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "center", "bSortable": false }, 
            { "sClass": "center", "bSortable": false } 
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Keine Fahrzeuge vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});


<?php  }elseif($_GET['c']=="applyCrm"){ ?>


$(document).ready(function() {

    $('#customer_table').dataTable({
    	"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",        
        "aaSorting": [[0, 'asc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": false },
    		{ "sClass": "left", "bSortable": true },    		
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },            
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Keine Seite vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});



<?php  }elseif($_GET['c']=="bills"){ ?>

$(document).ready(function() {
    $('.datatable').dataTable({
    	"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",        
        "aaSorting": [[0, 'desc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": false },
    		{ "sClass": "left", "bSortable": true },    		
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Keine Seite vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});


<?php  }elseif($_GET['c']=="pages"){ ?>

$(document).ready(function() {
    $('.datatable').dataTable({
    	"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",        
        "aaSorting": [[0, 'asc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },    		
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "center", "bSortable": false },    		
    		{ "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Keine Seite vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});

<?php }elseif($_GET['c']=="lexikon"){ ?>


$(document).ready(function() {
    $('.datatable').dataTable({
    	"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",
        //"sAjaxSource": 'pl_request.php?wg=getdeaktivcars',
        "aaSorting": [[0, 'asc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },    		
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "center", "bSortable": false },    		
    		{ "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Kein Eintrag vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});


<?php  }elseif(($_GET['c']=="landingpages" or $_GET['c']=="marken")){ ?>


$(document).ready(function() {
    $('#lpage_table').dataTable({
    	"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",
        //"sAjaxSource": 'pl_request.php?wg=getdeaktivcars',
        "aaSorting": [[0, 'asc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": false },
    		{ "sClass": "left", "bSortable": true },    		
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "center", "bSortable": true },    		
    		{ "sClass": "center", "bSortable": true },
            { "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Kein Eintrag vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });


    $('#marken_table').dataTable({
    	"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",
        //"sAjaxSource": 'pl_request.php?wg=getdeaktivcars',
        "aaSorting": [[0, 'asc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": false },
    		{ "sClass": "left", "bSortable": true },    		
    		{ "sClass": "left", "bSortable": true },
            { "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Kein Eintrag vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });

    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});


function loadModels(){
	var modelId = document.form.marke.options[document.form.marke.selectedIndex].value.split("_")[0];
	$('#modell').html("<option value='0'>- Bitte w&auml;hlen -</option>");
	if(modelId!=0){		
		var url ="index.php?c=landingpages&a=getmodel&marke="+modelId;
        $.get( url, function( data ) {                                         
            var jmodels = eval(data);
			for(var i=0;i<jmodels.length;i++){
				var str="<option value='"+jmodels[i].id+"_"+jmodels[i].model+"'";
				str+=">";
				str+=jmodels[i].model+"</option>";
				$('#modell').append(str);				
			}
		});
	}	
} 
                                               
                                               
function editModell(modellid,name,status)
{
    $('#editmodellid').val(modellid);
    $('#editmodellname').val(name);
    if(status == "1"){ 
        $('#editstatus').attr('checked', true); 
    } else if(status == "0"){
        $('#editstatus').attr('checked', false);
    } 
    
}   
                                               
function delModell(modellid)
{
    $('#delmodellid').val(modellid);
}   


<?php }elseif($_GET['c']=="user"){ ?>


$(document).ready(function() {
    $('.datatable').dataTable({
    	"iDisplayLength": 25,
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6 hidden-xs'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",
        //"sAjaxSource": 'pl_request.php?wg=getdeaktivcars',
        "aaSorting": [[0, 'asc']],
        "aoColumns": [
    		{ "sClass": "left", "bSortable": false },
    		{ "sClass": "left", "bSortable": true },    		
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
            { "sClass": "left", "bSortable": true },
    		{ "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
        	"sZeroRecords": "<div align='center'>Kein Eintrag vorhanden!</div>",
            "sLengthMenu": "_MENU_",
            "sSearch": ""
        }
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});

                                               
                                               
<?php }elseif($_GET['c']=="dealerprofil"){ ?>
                                               

function editBill(reid,billid,status)
{
    //alert(billid + " "+ status);
    $('#billid').val(billid);      
    $('#reid').html(reid+"."+billid);                                               
    var llist = document.getElementById('set_status');    
    for (var i=0; i<llist.options.length; i++){        
        if (llist.options[i].value == status){
            llist.options[i].selected = true;
            break;
        }
    }
}                                               
                                               
			
<?php } ?>