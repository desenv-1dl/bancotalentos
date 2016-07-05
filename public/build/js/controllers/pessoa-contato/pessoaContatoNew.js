angular.module('app.controllers')
    .controller('PessoaContatoNewController',['$scope', '$location','$routeParams', 'PessoaContato','Pessoa','Contato', 
                function($scope, $location, $routeParams, PessoaContato,Pessoa,Contato){
        
        Pessoa.get({id: $routeParams.id}).$promise.then(function(pessoa) {
                // success
                $scope.pessoa =  pessoa;
                $scope.pessoaContato.pessoa_id = $scope.pessoa.id;
        });
        $scope.pessoaContato = new PessoaContato();
        

        Contato.query().$promise.then(function(contatos) {
                // success
                $scope.contatos = contatos;
                $scope.contatos.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.contato_id = 0;
            }, function(errResponse) {
                // fail
            });
        
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.pessoaContato.$save().then(function (){
                    $location.path('/pessoas/'+$scope.pessoa.id+'/edit');
                });
            }

        };
    }]);
