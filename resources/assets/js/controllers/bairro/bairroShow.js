angular.module('app.controllers')
    .controller('BairroShowController',
        ['$scope', '$location', '$routeParams', 'Bairro',
            function($scope, $location, $routeParams, Bairro){

            $scope.bairro = Bairro.get({id: $routeParams.id});
    }]);