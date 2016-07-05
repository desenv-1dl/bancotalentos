angular.module('app.controllers')
    .controller('PessoaEditController',
        ['$scope', '$location', '$routeParams', 'Pessoa','Bairro','Municipio','UnidadeFederacao','NivelFuncional','Organizacao','Genero','Formacao','Contato','PessoaContato',
            function($scope, $location, $routeParams, Pessoa,Bairro,Municipio,UnidadeFederacao,NivelFuncional,Organizacao,Genero,Formacao,Contato,PessoaContato){
            
//PESSOA-CONTATO INICIO
//            $scope.pessoasContatos = [];
//            $scope.contatos = [];
//            $scope.addContato =  function(){
//               $scope.pessoasContatos.push({
//                   contato_id: $scope.contato_id,
//                   valor: $scope.contato_valor
//               });
//                $scope.contato_id = 0;
//                $scope.contato_valor = '';
//            };
//            
//            $scope.removeContato =  function(indice){
//                $scope.pessoasContatos.splice(indice, 1);
//            };
//            
//            Contato.query().$promise.then(function(contatos) {
//                // success
//
//                $scope.contatos = contatos;
//                $scope.contatos.unshift({ id: 0, nome: ' -- Selecione -- ' });
//                //$scope.contato = 0;
//
//            }, function(errResponse) {
//                // fail
//            });
//            $scope.updateContatos =  function(){
//                //remover
//                angular.forEach($scope.pessoasContatosRemovidos, function(pessoaContato, chave){
//                    pessoaContato[0].$delete({id: pessoaContato[0].id});
//                });
//
//                angular.forEach($scope.pessoasContatos, function(pessoaContato, chave){
//                    if(typeof pessoaContato.id === 'undefined'){
//                        //salvar novo
//                        pessoaContato.$save().then(function (){
//                        });
//                    } else {
//                        //atualizar
//                        PessoaContato.update({id: pessoaContato.id},pessoaContato, function(){
//                        });
//                    }
//                });
//            };
//PESSOA-CONTATO FIM
                
                Pessoa.get({id: $routeParams.id}).$promise.then(function(pessoa) {
                // success
                $scope.pessoa =  pessoa;

                Municipio.query({
                    search: 'unidade_federacao_id:'+pessoa.municipio.data.unidade_federacao_id
                }).$promise.then(function(municipios) {
                        // success
                        $scope.municipios = municipios;
                        $scope.municipios.unshift({ id: 0, nome: ' -- Selecione -- ' });

                        Bairro.query({
                            search: 'municipio_id:'+pessoa.municipio_id
                        }).$promise.then(function(bairros) {
                                // success
                                $scope.bairros = bairros;
                                $scope.bairros.unshift({ id: 0, nome: ' -- Selecione -- ' });

                            }, function(errResponse) {
                                // fail
                            });

                    }, function(errResponse) {
                        // fail
                    });
                    UnidadeFederacao.query({
                        search: 'unidade_federacao.id:'+pessoa.municipio.data.unidade_federacao_id
                    }).$promise.then(function(unidadesFederacao) {
                
                        // success
                        $scope.unidadesFederacao = unidadesFederacao;
                        $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
                    }, function(errResponse) {
                        // fail
                    });
                    PessoaContato.query({
                        search: 'pessoa_id:'+pessoa.id
                        
                    }).$promise.then(function(pessoasContatos) {
                        // success
                        $scope.pessoasContatos = pessoasContatos;

                    }, function(errResponse) {
                        // fail
                    });

            }, function(errResponse) {
                // fail
            });
            
            

            NivelFuncional.query().$promise.then(function(niveisFuncionais) {
                // success
                $scope.niveisFuncionais = niveisFuncionais;
                $scope.niveisFuncionais.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
            }, function(errResponse) {
                // fail
            });
            Organizacao.query().$promise.then(function(organizacoes) {
                // success
                $scope.organizacoes = organizacoes;
                $scope.organizacoes.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
            }, function(errResponse) {
                // fail
            });
            
            Genero.query().$promise.then(function(generos) {
                // success
                $scope.generos = generos;
                $scope.generos.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
            }, function(errResponse) {
                // fail
            });
            
            Formacao.query().$promise.then(function(formacoes) {
                // success
                $scope.formacoes = formacoes;
                $scope.formacoes.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
            }, function(errResponse) {
                // fail
            });
            
            $scope.getMunicipios = function(){
                var id = $scope.pessoa.municipio.data.unidade_federacao_id;
                Municipio.query({
                    search: 'unidade_federacao_id:'+id
                }).$promise.then(function(municipios) {
                        // success
                        $scope.municipios = municipios;
                        $scope.municipios.unshift({ id: 0, nome: ' -- Selecione -- ' });
                        $scope.pessoa.municipio_id = 0;
                        $scope.pessoa.bairro_id = 0;
                    }, function(errResponse) {
                        // fail
                    });
            }

            $scope.getBairros = function(){
                if($scope.pessoa.municipio_id === null){
                    $scope.bairros = [];
                } else{
                    var id = $scope.pessoa.municipio_id;
                    Bairro.query({
                        search: 'municipio_id:'+id
                    }).$promise.then(function(bairros) {
                            // success
                            $scope.bairros = bairros;
                            $scope.bairros.unshift({ id: 0, nome: ' -- Selecione -- ' });
                            $scope.pessoa.bairro_id = 0;

                        }, function(errResponse) {
                            // fail
                        });
                }

            }

            
               $scope.save = function () {

                if($scope.form.$valid){
        //PESSOA-CONTATO INICIO
//                    $scope.updateContatos();
                    
        //PESSOA-CONTATO FIM
                    Pessoa.update({id: $scope.pessoa.id},$scope.pessoa, function(){
                        $location.path('/pessoas');
                    });
                }

            };

    }]);
