angular.module('app.controllers')
    .controller('GeneroEditController',
        ['$scope', '$location', '$routeParams', 'Genero',
            function($scope, $location, $routeParams, Genero){
            $scope.genero = Genero.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Genero.update({id: $scope.genero.id},$scope.genero, function(){
                        $location.path('/generos');
                    });
                }

            }

    }]);
