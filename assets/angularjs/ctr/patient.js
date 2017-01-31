angular
        .module('admin', [])
        .run(function ($rootScope) {
            $rootScope.title = 'Patient ';
        })
        .controller('patientController', ['$scope','$http', '$sce',
            function ($scope,$http, $sce) {


                
               
               
               
               

//                $scope.GetState = function () {
//                   // console.log($scope.states[$scope.country]);
//                    var option = '';
//                    var html = '<select class="form-control" ng-init="state ='+'HR'+'" ng-model="state" name="state" id="state">';
//                    angular.forEach($scope.states[$scope.country], function (value, key) {
//                        if(key == 'HR'){
//                            option += '<option value="' + key + '" selected>' + value + '</option>'; 
//                        }else{
//                             option += '<option value="' + key + '">' + value + '</option>';
//                        }
//                    });
//
//                    if (option != '' && $scope.country !== undefined) {
//                        html = html + option + '</select>';
//                    } else {
//                        html = '<input type="text" class="form-control" name="state" ng-init="state ='+'HR'+'" ng-model="state" id="state" value="" placeholder="State" required>';
//                    }
//                    return  $scope.htmlAdText = $sce.trustAsHtml(html);
//                };
                
                
                
                
                
            }
        ]);

