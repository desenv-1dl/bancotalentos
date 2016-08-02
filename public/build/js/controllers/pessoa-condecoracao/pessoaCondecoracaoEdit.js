angular.module('app.controllers')
    .controller('PessoaCondecoracaoEditController',
        ['$scope', '$filter','$location', '$routeParams', 'PessoaCondecoracao','Pessoa','Condecoracao',
            function($scope,$filter, $location, $routeParams, PessoaCondecoracao,Pessoa, Condecoracao){
                PessoaCondecoracao.get({id: $routeParams.id}).$promise.then(function(pessoaCondecoracao){
                    $scope.pessoaCondecoracao = pessoaCondecoracao;
                    $scope.pessoaCondecoracao.data_indicacao = $filter('date')($scope.pessoaCondecoracao.data_indicacao, "dd/MM/yyyy");
                    $scope.pessoaCondecoracao.data_condecoracao = $filter('date')($scope.pessoaCondecoracao.data_condecoracao, "dd/MM/yyyy");
                    
                    Pessoa.query({
                    search:'id:'+$scope.pessoaCondecoracao.pessoa_id}).$promise.then(function(pessoa){
                        $scope.pessoa = pessoa;
                        
                    });
                });
                
                Condecoracao.query().$promise.then(function(condecoracoes) {
                // success
                $scope.condecoracoes = condecoracoes;
                $scope.condecoracoes.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.pessoaCondecoracao.condecoracao_id = 0;
            }, function(errResponse) {
                // fail
         });

                $scope.save = function () {

                if($scope.form.$valid){
                    PessoaCondecoracao.update({id: $scope.pessoaCondecoracao.id},$scope.pessoaCondecoracao, function(){
                        $location.path('/pessoas-condecoracoes');
                    });
                }

            }

    }]);
