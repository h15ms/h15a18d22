angular
        .module('admin', [])
        .run(function ($rootScope) {
            $rootScope.title = 'Patient ';
        })
        .controller('patientController', ['$scope',function ($scope) {
                 $scope.data = [];
            }
        ]);

