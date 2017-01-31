// ------------------------------
// Sidebar Accordion Menu
// ------------------------------
var BASEURL='http://localhost/h15a18d22/';
//**********Start Angular Js for Hospital Module [Harpreet:27JAN17]***********/


var app = angular.module('hospitalApp', []).run(function ($rootScope) {
            $rootScope.title = 'Doctor ';
        })
.controller('hospitalCtrl', function($scope, $http) {
    $http.get(BASEURL+"admin/hospitalscrm/getindexjson")
    .then(function (response) {$scope.hosPital = response.data;});
   
});


//var ap = angular.module('hospitaleditApp', []);
var ap = angular.module('hospitaleditApp', []).controller('hospitaleditCtrl', function($scope, $http,$sce) {
            var id=$('#hospitalID').val();
//            alert(id);
     $http.get(BASEURL+"admin/hospitalscrm/viewhospitaldata?id="+id)
    .then(function (response) {
        $scope.hosPitaledit = response.data;
            var special= $scope.hosPitaledit[0].specialization.split(",");
            var html=""
            angular.forEach(special, function(value, key){
            html+='<li>'+value+'</li>';
            
         });
        $scope.htmlAdText = $sce.trustAsHtml(html);
      
        });
 
   
});


var appl=angular.module('specializationAPP',[]).controller('specializationCtrl', function($scope, $http,$sce){
    var id=$('#pageno').val();
     $http.get(BASEURL+'admin/specialization/getsonSpecialization?id='+id)
    .then(function(response) {
    $scope.speciliz=response.data;
    $scope.pagination = $sce.trustAsHtml(response.data.links);
    $scope.updateSpecif = function(id,st){
         $http.get(BASEURL+'admin/specialization/changestatus?id='+id+'&status='+st).then(function(res){

       return  $scope.speciliz=response.data;
 
        });
    }
    
    });
});

// var app = angular.module('hospitalApp',[]);
//    app.controller('bookController',function($scope,$http){	
//    $scope.insertData=function(){		
//    $http.post("insert.php", {
//		'bname':$scope.bname,
//		'bauthor':$scope.bauthor,
//		'bprice':$scope.bprice,
//		'blanguage':$scope.blanguage})
//    
//    .success(function(data,status,headers,config){
//    console.log("Data Inserted Successfully");
//    });
//        }
//         });  

//************************End AngularJS******************/
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
$(function () {
    //if($.cookie('admin_leftbar_collapse') === 'collapse-leftbar') {
    //    $('body').addClass('collapse-leftbar');
    //} else {
    //    $('body').removeClass('collapse-leftbar');
    //}

    $('body').on('click', 'ul.acc-menu a', function() {
        var LIs = $(this).closest('ul.acc-menu').children('li');
        $(this).closest('li').addClass('clicked');
        $.each( LIs, function(i) {
            if( $(LIs[i]).hasClass('clicked') ) {
                $(LIs[i]).removeClass('clicked');
                return true;
            }
            if($.cookie('admin_leftbar_collapse') !== 'collapse-leftbar' || $(this).parents('.acc-menu').length > 1) $(LIs[i]).find('ul.acc-menu:visible').slideToggle();
            $(LIs[i]).removeClass('open');
        });
        if($(this).siblings('ul.acc-menu:visible').length>0)
            $(this).closest('li').removeClass('open');
        else
            $(this).closest('li').addClass('open');
            if($.cookie('admin_leftbar_collapse') !== 'collapse-leftbar' || $(this).parents('.acc-menu').length > 1) $(this).siblings('ul.acc-menu').slideToggle({
                duration: 200,
                progress: function(){
                    checkpageheight();
                    if ($(this).closest('li').is(":last-child")) { //only scroll down if last-child
                        $("#sidebar").animate({ scrollTop: $("#sidebar").height()},0);
                    }

                },
                complete: function(){
                    $("#sidebar").getNiceScroll().resize();
                }
            });
    });

    var targetAnchor;
    $.each ($('ul.acc-menu a'), function() {
       //console.log(this.href);
       
        if( this.href == window.location ) {
            targetAnchor = this;
            return false;
        }
    });

    var parent = $(targetAnchor).closest('li');
    while(true) {
        parent.addClass('active');
        parent.closest('ul.acc-menu').show().closest('li').addClass('open');
        parent = $(parent).parents('li').eq(0);
        if( $(parent).parents('ul.acc-menu').length <= 0 ) break;
    }

    var liHasUlChild = $('li').filter(function(){
        return $(this).find('ul.acc-menu').length;
    });
    $(liHasUlChild).addClass('hasChild');

    if($.cookie('admin_leftbar_collapse') === 'collapse-leftbar') {
        $('ul.acc-menu:first ul.acc-menu').css('visibility', 'hidden');
    }
    $('ul.acc-menu:first > li').hover(function() {
        if($.cookie('admin_leftbar_collapse') === 'collapse-leftbar')
            $(this).find('ul.acc-menu').css('visibility', '');
    }, function() {
        if($.cookie('admin_leftbar_collapse') === 'collapse-leftbar')
            $(this).find('ul.acc-menu').css('visibility', 'hidden');
    });


    // Reads Cookie for Collapsible Leftbar 
    // if($.cookie('admin_leftbar_collapse') === 'collapse-leftbar')
    //     $("body").addClass("collapse-leftbar");

    //Make only visible area scrollable
    $("#widgetarea").css({"max-height":$("body").height()});
    //Bind widgetarea to nicescroll
    $("#widgetarea").niceScroll({horizrailenabled:false});

    // Toggle Buttons
    // ------------------------------

    //On click of left menu
    $("a#leftmenu-trigger").click(function () {
        if ((window.innerWidth)<768) {
            $("body").toggleClass("show-leftbar");
        } else {
            $("body").toggleClass("collapse-leftbar");

            //Sets Cookie for Toggle
            if($.cookie('admin_leftbar_collapse') === 'collapse-leftbar') {
                $.cookie('admin_leftbar_collapse', '');
                $('ul.acc-menu').css('visibility', '');

            } else {
                $.each($('.acc-menu'), function() {
                    if($(this).css('display') == 'none')
                        $(this).css('display', '');
                });
                
                $('ul.acc-menu:first ul.acc-menu').css('visibility', 'hidden');
                $.cookie('admin_leftbar_collapse', 'collapse-leftbar');
            }
        }
        checkpageheight();
        leftbarScrollShow();
    });

    // On click of right menu
    $("a#rightmenu-trigger").click(function () {
        $("body").toggleClass("show-rightbar");
        widgetheight();
        
        if($.cookie('admin_rightbar_show') === 'show-rightbar')
                $.cookie('admin_rightbar_show', '');
            else
                $.cookie('admin_rightbar_show', 'show-rightbar');
    });

    //set minimum height of page
    dh=($(document).height()-40);
    $("#page-content").css("min-height",dh+"px");
    //checkpageheight();

});

// Recalculate widget area on a widget being shown
$(".widget-body").on('shown.bs.collapse', function () {
    widgetheight();
});

// -------------------------------
// Sidebars Positionings
// -------------------------------

$(window).scroll(function(){
    $("#widgetarea").getNiceScroll().resize();
    $(".chathistory").getNiceScroll().resize();
    rightbarTopPos();
    leftbarTopPos();
});

$(window).resize(function(){
    widgetheight();

    rightbarRightPos();
    $("#sidebar").getNiceScroll().resize();
});
rightbarRightPos();


// -------------------------------
// Mobile Only - set sidebar as fixed position, slide
// -------------------------------

enquire.register("screen and (max-width: 767px)", {
    match : function() {
        // For less than 768px
        $(function() {

            //Bind sidebar to nicescroll
            $("#sidebar").niceScroll({horizrailenabled:false});
            leftbarScrollShow();

            //Click on body and hide leftbar
            $("#wrap").click(function(){
                if ($("body").hasClass("show-leftbar")) {
                    $("body").removeClass("show-leftbar");
                    leftbarScrollShow();
                }
            });

            //Fix a bug
            $('#sidebar ul.acc-menu').css('visibility', '');

            //open up leftbar
            $("body").removeClass("show-leftbar");
            $.removeCookie("admin_leftbar_collapse");

            $("body").removeClass("collapse-leftbar");

        });

        console.log("match");
    },
    unmatch : function() {

        //Remove nicescroll to clear up some memory
            $("#sidebar").niceScroll().remove();
            $("#sidebar").css("overflow","visible");

        console.log("unmatch");

        //hide leftbar
        $("body").removeClass("show-leftbar");

    }
});

//Helper functions
//---------------

//Fixing the show of scroll rails even when sidebar is hidden
function leftbarScrollShow () {
    if ($("body").hasClass("show-leftbar")) {
        $("#sidebar").getNiceScroll().show();
    } else {
        $("#sidebar").getNiceScroll().hide();
    }
    $("#sidebar").getNiceScroll().resize();
}

//set Top positions for changing between static and fixed header
function leftbarTopPos() {
    var scr=$('body.static-header').scrollTop();
    if (scr<41) {$('ul#sidebar').css('top',40-scr + 'px');} else {$('ul#sidebar').css('top',0);}
}

function rightbarTopPos() {
    var scr=$('body.static-header').scrollTop();
    if (scr<41) {$('#page-rightbar').css('top',40-scr + 'px');} else {$('#page-rightbar').css('top',0);}
}

//Set Right position for fixed layouts
function rightbarRightPos () {
    if ($('body').hasClass('fixed-layout')) {
        var $pc = $('#page-content');
        var ending_right = ($(window).width() - ($pc.offset().left + $pc.outerWidth()));
        if (ending_right<0) ending_right=0;
        $('#page-rightbar').css('right',ending_right);
    }
}

// Match page height with Sidebar Height
function checkpageheight() {
    sh=$("#page-leftbar").height();
    ch=$("#page-content").height();

    if (sh>ch) $("#page-content").css("min-height",sh+"px");
}

// Recalculate widget area to area visible
function widgetheight() {
    $("#widgetarea").css({"max-height":$("body").height()});
    $("#widgetarea").getNiceScroll().resize();
}

// -------------------------------
// Back to Top button
// -------------------------------

$('#back-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
    return false;
});

// -------------------------------
// Panel Collapses
// -------------------------------
$('a.panel-collapse').click(function() {
    $(this).children().toggleClass("fa-chevron-down fa-chevron-up");
    $(this).closest(".panel-heading").next().slideToggle({duration: 200});
    $(this).closest(".panel-heading").toggleClass('rounded-bottom');
    return false;
});

// -------------------------------
// Quick Start
// -------------------------------
$('#headerbardropdown').click(function() {
    $('#headerbar').css('top',0);
    return false;
});

$('#headerbardropdown').click(function(event) {
  $('html').one('click',function() {
    $('#headerbar').css('top','-1000px');
  });

  event.stopPropagation();
});


// -------------------------------
// Keep search open on click
// -------------------------------
$('#search>a').click(function () {
    $('#search').toggleClass('keep-open');
    $('#search>a i').toggleClass("opacity-control");
});

$('#search').click(function(event) {
  $('html').one('click',function() {
    $('#search').removeClass('keep-open');
    $('#search>a i').addClass("opacity-control");
  });

  event.stopPropagation();
});

//Presentational: set all panel-body with br0 if it has panel-footer
$(".panel-footer").prev().css("border-radius","0");



function opennewpopup(){

   var other=$('#hospitalssel').val(); 
 
   if(other==='oth'){
     
       $('#new_bankpop').modal('show');
   }

}

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
