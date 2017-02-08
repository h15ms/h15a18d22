


function delpopup(id , name ){

     $('#appid').val(id);
     $('#hospitalname').html(name);
     $('#new_bankpop').modal('show');
   }


function delhospital(){
    var id=$('#appid').val();

    $.ajax({url:"hospitalscrm/delhospitalwithid",
       data:{ appid:id, },
        success:function(res1)
        { 
        location.reload();   
       
        }
   });
}


function opennewpopup(){

   var other=$('#hospitalssel').val(); 
 
   if(other==='oth'){
     
       $('#new_bankpop').modal('show');
   }

}
$(document).ready(function(){
$('#ad_n_b').click(function(){
   var hospitl=$('#n_b_name').val(); 
         $.ajax({url:"addhospitalname",
         data:{hospitl:hospitl},
        success:function(res)
        { 
           $('#response').html(res); 
           console.log(res);
        }
    }).done(function() {
      $.ajax({url:"updateGetNewHospital",
       
        success:function(res1)
        { 
           $('#hospitalssel').html(res1); 
            setTimeout(function() {
             
             $('#new_bankpop').modal('hide');
            }, 2000);
         
        }
   });
});
});
});
