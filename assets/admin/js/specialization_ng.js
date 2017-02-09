// ------------------------------
// Sidebar Accordion Menu
// ------------------------------
var BASEURL='http://localhost/h15a18d22/';
//**********Start Angular Js for Hospital Module [Harpreet:27JAN17]***********/




var appl=angular.module('specializationAPP',[]).controller('specializationCtrl', function($scope, $http,$sce,$window){
    var id=$('#pageno').val();
     $http.get(BASEURL+'admin/specialization/getsonSpecialization?id='+id)
    .then(function(response) {
     $scope.speciliz=response.data;
     $scope.pagination = $sce.trustAsHtml(response.data.links);
     $scope.updateSpecif = function(id,st){
     $http.get(BASEURL+'admin/specialization/changestatus?id='+id+'&status='+st).then(function(res){
     $scope.speciliz=response.data;
     $window.location.reload(); 
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


