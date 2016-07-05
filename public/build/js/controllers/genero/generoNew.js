angular.module('app.controllers')
    .controller('GeneroNewController',['$scope', '$location', 'Genero', function($scope, $location, Genero){

        $scope.genero = new Genero();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.genero.$save().then(function (){
                    $location.path('/generos');
                });
            }

        }

    }]);
