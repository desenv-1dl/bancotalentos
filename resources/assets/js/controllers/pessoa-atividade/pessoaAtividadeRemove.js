angular.module('app.controllers')
    .controller('PessoaAtividadeRemoveController',
        ['$scope', '$location', '$routeParams', 'PessoaAtividade',
            function($scope, $location, $routeParams, PessoaAtividade){

            $scope.pessoaAtividade = PessoaAtividade.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.pessoaAtividade.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/pessoas-atividades');
                });
            }

    }]);
