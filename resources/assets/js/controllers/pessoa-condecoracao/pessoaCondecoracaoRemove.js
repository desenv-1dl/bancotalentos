angular.module('app.controllers')
    .controller('PessoaCondecoracaoRemoveController',
        ['$scope', '$location', '$routeParams', 'PessoaCondecoracao','Pessoa',
            function($scope, $location, $routeParams, PessoaCondecoracao,Pessoa){

            PessoaCondecoracao.get({id: $routeParams.id}).$promise.then(function(pessoaCondecoracao){
                    $scope.pessoaCondecoracao = pessoaCondecoracao;
                    
                    Pessoa.query({
                    search:'id:'+$scope.pessoaCondecoracao.pessoa_id}).$promise.then(function(pessoa){
                        $scope.pessoa = pessoa;
                    });
                });


            $scope.remove = function () {

                $scope.pessoaCondecoracao.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/pessoas-condecoracoes');
                });
            }

    }]);
