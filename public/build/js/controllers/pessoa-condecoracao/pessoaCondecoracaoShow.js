angular.module('app.controllers')
    .controller('PessoaCondecoracaoShowController',
        ['$scope', '$location', '$routeParams', 'PessoaCondecoracao',
            function($scope, $location, $routeParams, PessoaCondecoracao){

            $scope.pessoaCondecoracao = PessoaCondecoracao.get({id: $routeParams.id});
    }]);
