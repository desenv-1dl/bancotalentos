angular.module('app.controllers')
    .controller('UnidadeFederacaoShowController',
        ['$scope', '$location', '$routeParams', 'UnidadeFederacao',
            function($scope, $location, $routeParams, UnidadeFederacao){

            $scope.unidadeFederacao = UnidadeFederacao.get({id: $routeParams.id});
    }]);
