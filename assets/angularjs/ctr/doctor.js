angular
        .module('admin', [])
        .run(function ($rootScope) {
            $rootScope.title = 'myTest Page';
        })
        .controller('testController', ['$scope',
            function ($scope) {


                $scope.countries = {

                    'USA': {
                        'Alabama': ['Montgomery', 'Birmingham'],
                        'California': ['Sacramento', 'Fremont'],
                        'Illinois': ['Springfield', 'Chicago']
                    },
                    'India': {
                        'Maharashtra': ['Pune', 'Mumbai', 'Nagpur', 'Akola'],
                        'Madhya Pradesh': ['Indore', 'Bhopal', 'Jabalpur'],
                        'Rajasthan': ['Jaipur', 'Ajmer', 'Jodhpur']
                    },
                    'Australia': {
                        'New South Wales': ['Sydney'],
                        'Victoria': ['Melbourne']
                    }
                };

                $scope.GetSelectedCountry = function () {
                    $scope.strCountry = $scope.countrySrc;
                };
                $scope.GetSelectedState = function () {
                    $scope.strState = $scope.stateSrc;
                    
                };
            }
        ])
        
        
        
        
        
        
        
        
        
