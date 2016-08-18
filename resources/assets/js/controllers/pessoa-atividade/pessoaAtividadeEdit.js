angular.module('app.controllers')
    .controller('PessoaAtividadeEditController',
        ['$scope', '$location', '$routeParams', 'PessoaAtividade','Atividade','Modalidade','Instituicao','Municipio',
            function($scope, $location, $routeParams, PessoaAtividade,Atividade,Modalidade,Instituicao,Municipio){
                
                PessoaAtividade.get({id: $routeParams.id}).$promise.then(function(pessoaAtividade){
                    $scope.pessoaAtividade = pessoaAtividade;
                    
                Modalidade.query().$promise.then(function(modalidades) {
                   
                    $scope.modalidades = modalidades;
                    $scope.modalidades.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
                }, function(errResponse) {
                    // fail
                    });
                    
                Atividade.query().$promise.then(function(atividades) {
                   
                    $scope.atividades = atividades;
                    $scope.atividades.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
                }, function(errResponse) {
                    // fail
                });
                
                Instituicao.query().$promise.then(function(instituicoes) {
                   
                    $scope.instituicoes = instituicoes;
                    $scope.instituicoes.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
                }, function(errResponse) {
                    // fail
                });
                
                Municipio.query().$promise.then(function(municipios) {
                   
                    $scope.municipios = municipios;
                    $scope.municipios.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
                }, function(errResponse) {
                    // fail
                });
                    
                    
                });
                
                

                $scope.save = function () {

                if($scope.form.$valid){
                    PessoaAtividade.update({id: $scope.pessoaAtividade.id},$scope.pessoaAtividade, function(){
                        $location.path('/pessoas-atividades');
                    });
                }

            }

    }]);
