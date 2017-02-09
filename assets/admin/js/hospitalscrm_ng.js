// ------------------------------
// Sidebar Accordion Menu
// ------------------------------
var BASEURL='http://localhost/h15a18d22/';
//**********Start Angular Js for Hospital Module [Harpreet:27JAN17]***********/


var app = angular.module('hospitalApp', []).run(function ($rootScope) {
            $rootScope.title = 'Hospital ';
        })
.controller('hospitalCtrl', function($scope, $http) {
    $http.get(BASEURL+"admin/hospitalscrm/getindexjson")
    .then(function (response) {$scope.hosPital = response.data;
    $scope.delpopupn = function(id,name){
     $('#appid').val(id);
     $('#hospitalname').html(name);
     $('#new_bankpop').modal('show');
   }
    
    
    });
   
});


var ap = angular.module('hospitaleditApp', []).controller('hospitaleditCtrl', function($scope, $http,$sce) {
            var id=$('#hospitalID').val();
     $http.get(BASEURL+"admin/hospitalscrm/viewhospitaldata?id="+id)
    .then(function (response) {
        $scope.hosPitaledit = response.data;
            var special= $scope.hosPitaledit['sepecial'];
            var html=""
            angular.forEach(special, function(value, key){
            html+='<li> - '+value.sepcialization+'</li>';
            
         });
        $scope.htmlAdText = $sce.trustAsHtml(html);
      
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


