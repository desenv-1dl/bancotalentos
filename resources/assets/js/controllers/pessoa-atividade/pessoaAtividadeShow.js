angular.module('app.controllers')
    .controller('PessoaAtividadeShowController',
        ['$scope', '$location', '$routeParams', 'PessoaAtividade',
            function($scope, $location, $routeParams, PessoaAtividade){

            $scope.pessoaAtividade = PessoaAtividade.get({id: $routeParams.id});
    }]);
