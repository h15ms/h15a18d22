var BASEURL = 'http://localhost/h15a18d22/';

angular
        .module('admin', [])
        .run(function ($rootScope) {
            $rootScope.title = 'Appointment ';
        })
        .controller('appointmentController', ['$scope', '$http', '$sce', function ($scope, $http, $sce) {
                $http({
                    method: 'GET',
                    url: BASEURL + 'admin/appointment/hospital/'
                }).then(
                        function (response) {
                            $scope.hospitals = response.data;
                        }
                );
        
        $http.get(BASEURL + "admin/appointment/doctor").then(function (response) { $scope.doctors = response.data; });


                //   getspecialitiesyAll

                $http.get(BASEURL + "admin/appointment/getspecialitiesyAll")
                        .then(function (response) {
                            var speciality = '<select class="form-control" ng-model="speciality" name="speciality" id="speciality">';
                            var optionSpeciality = '<option value="">Select Speciality</option>';
                            var optionData = '';

                            if (response.data != 'false') {
                                angular.forEach(response.data, function (value, key) {
                                    console.log(value);
                                    optionData += '<option value="' + value.id + '">' + value.sepcialization + '</option>';
                                });

                                optionSpeciality = optionSpeciality + optionData;
                                speciality = speciality + optionSpeciality + '</select>';
                                return  $scope.speciality = $sce.trustAsHtml(speciality);
                            } else {
                                speciality = speciality + optionSpeciality + '</select>';
                                return  $scope.speciality = $sce.trustAsHtml(speciality);
                            }
                        });




                $scope.GetSpeciality = function () {
                    $http.get(BASEURL + "admin/appointment/getspeciality?id=" + $scope.hospital)
                            .then(function (response) {
                                var speciality = '<select class="form-control" ng-model="speciality" name="speciality" id="speciality">';
                                var optionSpeciality = '<option value="">Select Speciality</option>';
                                var optionData = '';


                                if (response.data != 'false') {
                                    angular.forEach(response.data, function (value, key) {
                                        console.log(value);
                                        optionData += '<option value="' + value.id + '">' + value.sepcialization + '</option>';
                                    });
                                }
//                                if (optionData != '' && $scope.hospital !== undefined) {
//                                     optionSpeciality = optionSpeciality + optionData ;
//                                    speciality = speciality + optionSpeciality + '</select>';
//                                    return  $scope.speciality = $sce.trustAsHtml(speciality); 
//                                }else{
//                                    return  $scope.speciality = $sce.trustAsHtml(''); 
//                                }

                                optionSpeciality = optionSpeciality + optionData;
                                speciality = speciality + optionSpeciality + '</select>';
                                return  $scope.speciality = $sce.trustAsHtml(speciality);


                            });
                };
                
                
                /*****For Doctor ******/
                
                
                
                $scope.GetDoctor = function () {
                    $http.get(BASEURL + "admin/appointment/doctor")
                            .then(function (response) {
                                $scope.doctors = response.data;
                                //return  $scope.speciality = $sce.trustAsHtml(speciality);


                            });
                };
                
                
                
                $scope.find = function(){  //   speciality  hospital
                    
                    alert($scope.hospital);
//                    $http({
//                        url: BASEURL + "admin/appointment/searchdoctor",
//                        method: "POST",
//                        data: {"hospital": $scope.hospital,"speciality": $scope.speciality}
//                    }).success(function (data, status, headers, config) {
//                        console.log(data);
//                        $scope.data = data;
//                    }).error(function (data, status, headers, config) {
//                        $scope.status = status;
//                    });
                    
                    
                    $http({
                        method: 'POST',
                        url: BASEURL + "admin/appointment/searchdoctor",
                        data: {"hospital": $scope.hospital,"speciality": $scope.speciality}
                    }).then(function (success) {
                         console.log(success);

                    }, function (error) {

                    });
                    
                    
                    
                    
                    
                    
                }
                
                
                /******** End Here *************/
                
                
                
            
                
            }
        ]);

