angular.module('app.controllers')
    .controller('OrganizacaoShowController',
        ['$scope', '$location', '$routeParams', 'Organizacao',
            function($scope, $location, $routeParams, Organizacao){

            $scope.organizacao = Organizacao.get({id: $routeParams.id});
    }]);
