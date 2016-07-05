angular.module('app.controllers')
    .controller('GeneroRemoveController',
        ['$scope', '$location', '$routeParams', 'Genero',
            function($scope, $location, $routeParams, Genero){

            $scope.genero = Genero.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.genero.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/generos');
                });
            }

    }]);
