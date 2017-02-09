


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
      $('#specialization').multiselect({
        columns: 1,
        placeholder: 'Select Specialization',
        search: true,
        selectAll: true
    });
    var page=$('#pagename').val();
 //***********CODE FOR EDIT HOSPITAL START***************/  
    if(page=='edithospital'){
    var sp=$('#sp').val();
    $('.ms-options-wrap button').text(sp);
    var specification=$('#countofspecificaiton').val();
    var sel_speci=$('#sele_specificaiton').val();
    var spe_arr=sel_speci.split(',');
    for(var i=1; i<specification; i++){
        var ch=$('#ms-opt-'+i).val();
        if(jQuery.inArray(ch, spe_arr) !== -1 ){
                     
           $('#ms-opt-'+i).attr('checked','checked')
        } 
    }

}
 //***********CODE FOR EDIT HOSPITAL END***************/  
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
