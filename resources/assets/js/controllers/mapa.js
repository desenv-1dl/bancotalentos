angular.module('app.controllers')
    .controller('MapaController', ['$scope', 'Home', '$uibModal', function ($scope, Home, $uibModal) {

        console.log($uibModal);

        //$scope.open = function (size) {
            //console.log(size + '  XXX');
            var modalInstance = $uibModal.open({
                animation: $scope.animationsEnabled,
                templateUrl: 'build/views/pessoa/edit.html',
                controller: 'PessoaEditController',
                //size: size,
                resolve: {
                    //items: function () {
                    //    return $scope.items;
                    //}
                }
            });

            modalInstance.result.then(function (selectedItem) {
               // $scope.selected = selectedItem;
            }, function () {
                //$log.info('Modal dismissed at: ' + new Date());
            });
        //};

    }]);

angular.module('app.controllers')
    .controller('PessoaEditController',
        ['$scope', '$location', '$routeParams',
            'UnidadeFederacao', 'Municipio', 'Bairro', 'Contato', 'PessoaContato', 'Pessoa',
            function($scope, $location, $routeParams,
                     UnidadeFederacao, Municipio, Bairro, Contato, PessoaContato, Pessoa){

                $scope.pessoasContatos = [];
                $scope.pessoasContatosRemovidos = [];
                $scope.contatos = [];

                Contato.query().$promise.then(function(contatos) {
                    // success
                    $scope.contatos = contatos;
                    $scope.contatos.unshift({ id: 0, nome: ' -- Selecione -- ' });
                    //$scope.contato = 0;

                }, function(errResponse) {
                    // fail
                });


                Pessoa.get({id: 5}).$promise.then(function(pessoa) {
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

                UnidadeFederacao.query().$promise.then(function(unidadesFederacao) {
                    // success
                    $scope.unidadesFederacao = unidadesFederacao;
                    $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });

                }, function(errResponse) {
                    // fail
                });

                $scope.addContato =  function(){
                    var pessoaContato = new PessoaContato({
                        pessoa_id: $scope.pessoa.id, contato_id: $scope.contato_id, valor: $scope.contato_valor
                    });
                    $scope.pessoasContatos.push(pessoaContato);
                    $scope.contato_id = 0;
                    $scope.contato_valor = '';
                };

                $scope.removeContato =  function(indice){
                    $scope.pessoasContatosRemovidos.push($scope.pessoasContatos.splice(indice, 1));
                };

                $scope.updateContatos =  function(){
                    //remover
                    angular.forEach($scope.pessoasContatosRemovidos, function(pessoaContato, chave){
                        pessoaContato[0].$delete({id: pessoaContato[0].id});
                    });

                    angular.forEach($scope.pessoasContatos, function(pessoaContato, chave){
                        if(typeof pessoaContato.id === 'undefined'){
                            //salvar novo
                            pessoaContato.$save().then(function (){
                            });
                        } else {
                            //atualizar
                            PessoaContato.update({id: pessoaContato.id},pessoaContato, function(){
                            });
                        }
                    });
                };

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
                        $scope.updateContatos();
                        Pessoa.update({id: $scope.pessoa.id},$scope.pessoa, function(){
                            $location.path('/pessoas');
                        });
                    }
                }

            }]);
