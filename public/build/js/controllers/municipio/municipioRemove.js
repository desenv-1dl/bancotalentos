angular.module('app.controllers')
    .controller('MunicipioRemoveController',
        ['$scope', '$location', '$routeParams', 'Municipio',
            function($scope, $location, $routeParams, Municipio){

            $scope.municipio = Municipio.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.municipio.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/municipios');
                });
            }

    }]);
