angular.module('app.controllers')
    .controller('PaisShowController',
        ['$scope', '$location', '$routeParams', 'Pais',
            function($scope, $location, $routeParams, Pais){

            $scope.pais = Pais.get({id: $routeParams.id});
    }]);
