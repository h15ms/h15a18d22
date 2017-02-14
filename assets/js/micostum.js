// JavaScript Document

$(document).ready(function() {
   
              var owl = $('#popular-hospitals');
              owl.owlCarousel({
                margin: 10,
				autoplay:true,
                autoplayTimeout:3500,
                nav: true,
				dots: false,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
				  800: {
                    items: 3
                  },
                  1000: {
                    items: 4
                  }
                }
              });
            });

$(function () {
	
	//datepicker//
	  var $promo = $('.datepicker-promo');
      $promo.datepicker({
      language: 'en'
      })
	  
	  
    
	
	  //ripple//
	 $('.ripple').on('click', function (event) {
      event.preventDefault();
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      },3000);
    });
 $('.rippleblk').on('click', function (event) {
      event.preventDefault();
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('rippleblk-effect');
      var $ripple = $(".rippleblk-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 3000);
    });
	$('.ripplegrey').on('click', function (event) {
      event.preventDefault();
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripplegrey-effect');
      var $ripple = $(".ripplegrey-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 3000);
    });
	//ripple end//
	
	
      // Slideshow 1
      $("#slider1").responsiveSlides({
        width:"100%",
        speed: 1000
      });
	  
	 //search//
	  $('.mi-srch').click(function(){
      $('.mi_srchbox').toggle();
		 });
		 
	   $(document).on("click", function(event){
        var $trigger = $("nav");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".mi_srchbox").css('display','none');
        }            
    });
    function getTime(timeva){
        if(timeva.length>=2){
      
        var timeJson='{"time_arr":{"0":"12:00 AM","1":"1:00 AM","1.5":"1:30 AM","2":"2:00 AM","2.5":"2:30 AM","3":"3:00 AM","3.5":"3:30 AM","4":"4:00 AM","4.5":"4:30 AM","5":"5:00 AM","5.5":"5:30 AM","6":"6:00 AM","6.5":"6:30 AM","7":"7:00 AM","7.5":"7:30 AM","8":"8:00 AM","8.5":"8:30 AM","9":"9:00 AM","9.5":"9:30 AM","10":"10:00 AM","10.5":"10:30 AM","11":"11:00 AM","11.5":"11:30 AM","12":"12:00 PM","12.5":"12:30 PM","13":"1:00 PM","13.5":"1:30 PM","14":"2:00 PM","14.5":"2:30 PM","15":"3:00 PM","15.5":"3:30 PM","16":"4:00 PM","16.5":"4:30 PM","17":"5:00 PM","17.5":"5:30 PM","18":"6:00 PM","18.5":"6:30 PM","19":"7:00 PM","19.5":"7:30 PM","20":"8:00 PM","20.5":"8:30 PM","21":"9:00 PM","21.5":"9:30 PM","22":"10:00 PM","22.5":"10:30 PM","23":"11:00 PM","23.5":"11:30 PM","24":"12:00 AM","24.5":"12:30 AM"}}';
        var obj = $.parseJSON(timeJson) ;
        return obj.time_arr[timeva[0]]+'     '+obj.time_arr[timeva[1]];
      
    }
  } 	 
      $("#timerange").slider({
	range: true,
        min: 0,
        max: 23.5,
        values: [ 75, 300 ],
        formatter: function(value) {
          
       $('.mi_rangevalue').html(getTime(value));
       console.log(value);
	}
	  });
	  
	  $("#pricerange").slider({
		range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ]
	  });
	   
	   //show left menu //
	   $('.mi_shortby').click(function(){
		 $('.mi_lftfilter').toggleClass('mi_active');
		 $('.transparent-bg').addClass('mi_active');     
	   }); 
	  $('.transparent-bg').click(function(){ 
	     $('.transparent-bg').removeClass('mi_active');
          $('.mi_lftfilter').removeClass('mi_active');		 
	  }); 
	  
	   //modifyfilter //
	  
	  $('.mi_modify').click(function(){
	    $('.mi_modifyfilterbox').slideToggle(300);
	   });
	  
	  
	  //scroll//

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
});
  $('#specializationw').multiselect({
        columns: 1,
        placeholder: 'Select Specialization',
        search: true,
        selectAll: true
    });
 