angular.module('app.controllers')
    .controller('PessoaAtividadeNewController',['$scope', '$location','$routeParams', 'PessoaAtividade','Pessoa','Atividade','Municipio','UnidadeFederacao','Pais','Modalidade','Instituicao',
                function($scope, $location, $routeParams, PessoaAtividade,Pessoa,Atividade,Municipio,UnidadeFederacao,Pais,Modalidade,Instituicao){
        
        Pessoa.get({id: $routeParams.id}).$promise.then(function(pessoa) {
            // success
            $scope.pessoa =  pessoa;
            $scope.pessoaAtividade.pessoa_id = $scope.pessoa.id;
        });
                    
        $scope.municipios = [];
        $scope.unidadesFederacao = [];
        
        Pais.query().$promise.then(function(paises) {
                // success
                $scope.paises = paises;
                $scope.paises.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.paises_id = 0;
            }, function(errResponse) {
                // fail
            });
            $scope.getUnidadesFederacao = function(){
                var id = $scope.pais_id;
                UnidadeFederacao.query({
                    search: 'pais_id:'+id
                }).$promise.then(function(unidadesFederacao) {
                        // success
                        $scope.unidadesFederacao = unidadesFederacao;
                        $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });
                        $scope.unidade_federacao_id = 0;
                        $scope.pessoaAtividade.municipio_id = 0;
                    }, function(errResponse) {
                        // fail
                    });
            }

            $scope.getMunicipios = function(){
                if($scope.unidade_federacao_id === null){
                    $scope.municipios = [];
                } else{
                    var id = $scope.unidade_federacao_id;
                    Municipio.query({
                        search: 'unidade_federacao_id:'+id
                    }).$promise.then(function(municipios) {
                            // success
                            $scope.municipios = municipios;
                            $scope.municipios.unshift({ id: 0, nome: ' -- Selecione -- ' });
                            $scope.pessoaAtividade.municipio_id = 0;

                        }, function(errResponse) {
                            // fail
                        });
                }

            }
        
        
        $scope.pessoaAtividade = new PessoaAtividade();

        Atividade.query().$promise.then(function(atividades) {
                // success
                $scope.atividades = atividades;
                $scope.atividades.unshift({ id: 0, nome: ' -- Selecione -- ' });
                //$scope.pessoaAtividade.atividade_id = 0;
            }, function(errResponse) {
                // fail
         });
         
         Modalidade.query().$promise.then(function(modalidades) {
                // success
                $scope.modalidades = modalidades;
                $scope.modalidades.unshift({ id: 0, nome: ' -- Selecione -- ' });
                //$scope.modalidade_id = 0;
            }, function(errResponse) {
                // fail
         });
         Instituicao.query().$promise.then(function(instituicoes) {
                // success
                $scope.instituicoes = instituicoes;
                $scope.instituicoes.unshift({ id: 0, nome: ' -- Selecione -- ' });
                //$scope.instituicao_id = 0;
            }, function(errResponse) {
                // fail
         });
        
         
        
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.pessoaAtividade.$save().then(function (){
                    $location.path('/pessoas/'+$scope.pessoa.id+'/edit');
                });
            }

        };
    }]);
