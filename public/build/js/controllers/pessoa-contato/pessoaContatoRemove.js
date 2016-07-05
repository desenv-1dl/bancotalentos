angular.module('app.controllers')
    .controller('PessoaContatoRemoveController',
        ['$scope', '$location', '$routeParams', 'PessoaContato',
            function($scope, $location, $routeParams, PessoaContato){

            $scope.pessoaContato = PessoaContato.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.pessoaContato.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/pessoas-contatos');
                });
            }

    }]);
