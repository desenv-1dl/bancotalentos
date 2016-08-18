angular.module('app.controllers')
    .controller('MunicipioShowController',
        ['$scope', '$location', '$routeParams', 'Municipio','UnidadeFederacao',
            function($scope, $location, $routeParams, Municipio,UnidadeFederacao){

            $scope.municipio = Municipio.get({id: $routeParams.id});
            $scope.unidadeFederacao = UnidadeFederacao.get({id: $scope.municipio.unidade_federacao_id});
    }]);
