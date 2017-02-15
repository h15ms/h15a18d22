

$('#addSidePanel').multiselect({
        columns: 1,
        placeholder: 'Select Specialization',
        search: true,
        selectAll: true
});


   

    $(document).ready(function(){
  // alert('dsafhjk');

    	$("#user_ajax").change(function(){
    	  // alert("admin/fetchsidepanel");
    	    $.get("admin/fetchsidepanel", function(data, status){
    	        alert("Data: " + data + "\nStatus: " + status);
    	    });
    	});

    });