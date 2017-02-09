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
        alert(name);
     $('#appid').val(id);
     $('#hospitalname').html(name);
     $('#new_bankpop').modal('show');
   }
    
    
    });
   
});


//var ap = angular.module('hospitaleditApp', []);
var ap = angular.module('hospitaleditApp', []).controller('hospitaleditCtrl', function($scope, $http,$sce) {
            var id=$('#hospitalID').val();
//            alert(id);
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


var appl=angular.module('specializationAPP',[]).controller('specializationCtrl', function($scope, $http,$sce){
    var id=$('#pageno').val();
     $http.get(BASEURL+'admin/specialization/getsonSpecialization?id='+id)
    .then(function(response) {
     $scope.speciliz=response.data;
     $scope.pagination = $sce.trustAsHtml(response.data.links);
     $scope.updateSpecif = function(id,st){
     $http.get(BASEURL+'admin/specialization/changestatus?id='+id+'&status='+st).then(function(res){
     $scope.speciliz=response.data;
     });
    }
    
    });
}).controller('addspecialCtrl', function ($scope, $http, $window, $sce) {
    $scope.addpopup = function () {
        var speci = angular.element('#n_b_name').val();
        $http.get(BASEURL + 'admin/specialization/addspecilization?specifi=' + speci).then(function (rese) {
            $scope.responseres = $sce.trustAsHtml(rese.data);
            setTimeout(function () {
                $window.location.reload(1);
            }, 2000);
        });
    }
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


