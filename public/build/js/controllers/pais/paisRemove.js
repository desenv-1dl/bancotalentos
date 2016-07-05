angular.module('app.controllers')
    .controller('PaisRemoveController',
        ['$scope', '$location', '$routeParams', 'Pais',
            function($scope, $location, $routeParams, Pais){

            $scope.pais = Pais.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.pais.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/paises');
                });
            }

    }]);
