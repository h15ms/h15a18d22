$(document).ready(function() {    
    
     
    $('#click_changed_name_box :checkbox').change(function () {
    if ($(this).is(':checked')) {
        $("#changed_name_fields").show();
    } else {
        $("#changed_name_fields").hide();
    }
    });
    
    
    $('#click_same_address_permanent :checkbox').change(function () {
    if ($(this).is(':checked')) {        
        var street = $("#street_present").val();
        var city = $("#city_present").val();
        var state = $("#state_present").val();        
        $("#street_permanent").val(street);
        $("#city_permanent").val(city);
        $("#state_permanent").val(state);        
    } else {
        $("#street_permanent").val("");
        $("#city_permanent").val("");
        $("#state_permanent").val("");
    }
    });
    
//    $('#click_changed_name_box :checkbox').change(function () {
//    
//        
//    if ($(this).is(':checked')) {
//        $("#changed_name_fields").show();
//    } else {
//        $("#changed_name_fields").hide();
//    }
//    });
    
    
    
    
    
});



$( "#send" ).click(function()
{   
    var name          = $("#name").val();
    var phone         = $("#phone").val();
    var email         = $("#email").val();
    var msg           = $("#msg").val();     
    if((name!="" && phone!="" && email!="" && msg!="")){           
        var url = "index.php?c=home&a=sendmail&name="+name+"&phone="+phone+"&email="+email+"&msg="+msg+"";        
        $.get( url, function( data ) {  
            //alert(data);
            if(data == "err"){
                alert("Error!");                            
            }else{                
                $("#name").val("");
                $("#phone").val("");
                $("#email").val("");
                $("#msg").val("");            
                $("#msgsend").removeClass ( "hidden");                
                alert("We got your mail and we will reply as soon as posible!");                
            }               
        });
    }else{    
        alert("Fill out all fields!");
    }    
});



