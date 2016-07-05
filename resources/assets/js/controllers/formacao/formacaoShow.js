angular.module('app.controllers')
    .controller('FormacaoShowController',
        ['$scope', '$location', '$routeParams', 'Formacao',
            function($scope, $location, $routeParams, Formacao){

            $scope.formacao = Formacao.get({id: $routeParams.id});
    }]);
