angular.module('dateTest', ['ui.utils.masks'])
			.controller('ctrl', function ctrl($scope) {
				$scope.initializedDateMask = new Date();
				$scope.initializedWithISOStringDateMask = (new Date()).toISOString();
			});
angular.module('app.controllers')
    .controller('PessoaNewController',[
        '$scope', '$location', 'Pessoa','NivelFuncional','Genero','Organizacao','Formacao','UnidadeFederacao','Municipio','Bairro','Contato','PessoaContato',
        function($scope, $location, Pessoa,NivelFuncional,Genero,Organizacao,Formacao,UnidadeFederacao,Municipio,Bairro,Contato,PessoaContato){

            $scope.pessoa =  new Pessoa();
            $scope.bairros = [];
            $scope.municipios = [];
            
            $scope.format = 'dd/MM/yyyy';
            $scope.date = new Date();
            
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
            //PESSOA-CONTATO FIM
            
            UnidadeFederacao.query().$promise.then(function(unidadesFederacao) {
                // success
                $scope.unidadesFederacao = unidadesFederacao;
                $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.unidade_federacao_id = 0;
            }, function(errResponse) {
                // fail
            });
            $scope.getMunicipios = function(){
                var id = $scope.unidade_federacao_id;
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

            NivelFuncional.query().$promise.then(function(niveisFuncionais) {
                // success
                $scope.niveisFuncionais = niveisFuncionais;
                $scope.niveisFuncionais.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.pessoa.nivel_funcional_id = 0;
            }, function(errResponse) {
                // fail
            });
            Organizacao.query().$promise.then(function(organizacoes) {
                // success
                $scope.organizacoes = organizacoes;
                $scope.organizacoes.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.pessoa.organizacao_id = 0;
            }, function(errResponse) {
                // fail
            });
            
            Genero.query().$promise.then(function(generos) {
                // success
                $scope.generos = generos;
                $scope.generos.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.pessoa.genero_id = 0;
            }, function(errResponse) {
                // fail
            });
            
            Formacao.query().$promise.then(function(formacoes) {
                // success
                $scope.formacoes = formacoes;
                $scope.formacoes.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.pessoa.formacao_id = 0;
            }, function(errResponse) {
                // fail
            });

            
        $scope.save = function () {
             if($scope.form.$valid){
                $scope.pessoa.$save().then(function (){
                    //PESSOA-CONTATO INICIO
//                    angular.forEach($scope.pessoasContatos, function(valor, chave){
//                        var pessoaContato = new PessoaContato({
//                            pessoa_id: pessoa.id, contato_id: valor.contato_id, valor: valor.valor
//                        });
//                        pessoaContato.$save().then(function (){
//                            //sucess
//                        }, function(){
//                            //fail
//                        });
//                    });
                    
                    //PESSOA-CONTATO FIM
                $location.path('/pessoas');
                }, function(){
                    //fail
                });
            }
        };

           

    }]);