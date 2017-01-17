// -------------------------------
// Initialize Data Tables
// -------------------------------

<? if($_GET['p']=="add_car"){ ?>

$(document).ready(function() {
    $('.datatables').dataTable({
    	"iDisplayLength": 10,
		"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",
        "sAjaxSource": 'pl_request.php?wg=getcars',
        "aoColumns": [
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },            		
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "left", "bSortable": true },
    		{ "sClass": "center", "bSortable": false },
    		{ "sClass": "center", "bSortable": false }
			],
        "oLanguage": {
            "sLengthMenu": "_MENU_",
            "sSearch": "",
            "sZeroRecords": "<p>Keine Fahrzeuge vorhanden!</p>",
        }        
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});


<? } ?>