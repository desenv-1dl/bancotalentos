angular.module('app.controllers')
    .controller('GeneroShowController',
        ['$scope', '$location', '$routeParams', 'Genero',
            function($scope, $location, $routeParams, Genero){

            $scope.genero = Genero.get({id: $routeParams.id});
    }]);
