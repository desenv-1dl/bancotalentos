angular.module('app.controllers')
    .controller('ContatoShowController',
        ['$scope', '$location', '$routeParams', 'Contato',
            function($scope, $location, $routeParams, Contato){

            $scope.contato = Contato.get({id: $routeParams.id});
    }]);
