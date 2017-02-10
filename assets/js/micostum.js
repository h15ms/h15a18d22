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
		 
      $("#timerange").slider({
		range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ]
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
  
$('#ex1').slider({
 
	formatter: function(value) {
          $('#slider1Value').html(value);
//        $.ajax({url:"hospital/gettimearray",
//         data:{ time:value, },
//        success:function(res1)
//        { 
//       //$('#slider1Value').html(res1);
//       console.log(json);
//        }
//        
//   });
		//return 'Time: ' + value+p;
                
	}
});

// Without JQuery
//var slider = new Slider('#ex1', {
//	formatter: function(value) {
//		return 'Current value: ' + value;
//	}
//});


