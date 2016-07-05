angular.module('app.controllers')
    .controller('PessoaContatoEditController',
        ['$scope', '$location', '$routeParams', 'PessoaContato',
            function($scope, $location, $routeParams, PessoaContato){
                $scope.pessoaContato = PessoaContato.get({id: $routeParams.id});

                $scope.save = function () {

                if($scope.form.$valid){
                    PessoaContato.update({id: $scope.pessoaContato.id},$scope.pessoaContato, function(){
                        $location.path('/pessoas-contatos');
                    });
                }

            }

    }]);
