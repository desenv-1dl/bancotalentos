angular.module('app.controllers')
    .controller('CondecoracaoShowController',
        ['$scope', '$location', '$routeParams', 'Condecoracao',
            function($scope, $location, $routeParams, Condecoracao){

            $scope.condecoracao = Condecoracao.get({id: $routeParams.id});
    }]);
