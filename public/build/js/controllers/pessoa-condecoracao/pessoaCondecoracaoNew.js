angular.module('app.controllers')
    .controller('PessoaCondecoracaoNewController',['$scope', '$location','$routeParams', 'PessoaCondecoracao','Pessoa','Condecoracao','NivelFuncional',
                function($scope, $location, $routeParams, PessoaCondecoracao,Pessoa,Condecoracao,NivelFuncional){
        
        Pessoa.get({id: $routeParams.id}).$promise.then(function(pessoa) {
            // success
            $scope.pessoa =  pessoa;
            $scope.pessoaCondecoracao.pessoa_id = $scope.pessoa.id;
        });
                    
        
        $scope.pessoaCondecoracao = new PessoaCondecoracao();

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
                $scope.pessoaCondecoracao.$save().then(function (){
                    $location.path('/pessoas/'+$scope.pessoa.id+'/edit');
                });
            }

        };
    }]);
