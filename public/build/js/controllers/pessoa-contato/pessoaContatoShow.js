angular.module('app.controllers')
    .controller('PessoaContatoShowController',
        ['$scope', '$location', '$routeParams', 'PessoaContato',
            function($scope, $location, $routeParams, PessoaContato){

            $scope.pessoaContato = PessoaContato.get({id: $routeParams.id});
    }]);
