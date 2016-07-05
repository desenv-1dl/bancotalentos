angular.module('app.controllers')
    .controller('PaisNewController',['$scope', '$location', 'Pais', function($scope, $location, Pais){

        $scope.pais = new Pais();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.pais.$save().then(function (){
                    $location.path('/paises');
                });
            }

        }

    }]);
