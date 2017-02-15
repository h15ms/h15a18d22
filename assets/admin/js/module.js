

$('#addSidePanel').multiselect({
        columns: 1,
        placeholder: 'Select Specialization',
        search: true,
        selectAll: true
});


   

    $(document).ready(function(){
  // alert('dsafhjk');

    	$("#user_ajax").change(function(){
    	 	var e = document.getElementById("user_ajax");
    	 	var index = e.options[e.selectedIndex].value;

    	    $.ajax({url:"fetchsidepanel",
    	     		data:{id:index},
		    	    success:function(result)
    	            { 
    	           		// alert(result);
    	           		$('.output-of-ajax').text(result);
    	            	// console.log(result);
    	            }
    	       });

    	});

    });