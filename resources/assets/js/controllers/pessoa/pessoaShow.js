angular.module('app.controllers')
    .controller('PessoaShowController',
        ['$scope', '$location', '$routeParams', 'Pessoa','Bairro','Municipio','UnidadeFederacao','PessoaContato','PessoaCondecoracao','PessoaAtividade','PessoaExperienciaProfissional',
            function($scope, $location, $routeParams, Pessoa,Bairro,Municipio,UnidadeFederacao,PessoaContato,PessoaCondecoracao,PessoaAtividade,PessoaExperienciaProfissional){
            
            Pessoa.get({id: $routeParams.id}).$promise.then(function(pessoa) {
                // success
                $scope.pessoa =  pessoa;
                var pessoa_id = pessoa.id;
                console.log($scope.pessoa);
//CONDECORACOES - INICIO
                
                PessoaCondecoracao.query({
                   search:'pessoa_id:'+$scope.pessoa.id}).$promise.then(function(pessoaCondecoracoes){
                    $scope.pessoaCondecoracoes = pessoaCondecoracoes;
                    console.log($scope.pessoaCondecoracoes);
                    
                    $scope.rowCollection = [
                                {condecoracoes: $scope.pessoaCondecoracoes}
                    ];

                    

                }, function(){
                    console.log('erro');
                }, function(){
                    console.log('foi');
                });
                //console.log($scope.pessoaCondecoracoes);
//CONDECORACOES - FIM               
                PessoaContato.query({
                    search:'pessoa_id:'+$scope.pessoa.id}).$promise.then(function(pessoaContatos){
                    $scope.pessoaContatos = pessoaContatos;
               console.log($scope.pessoaContatos);
                    
               });
               
               PessoaAtividade.query({
                   search:'pessoa_id:'+$scope.pessoa.id}).$promise.then(function(pessoaAtividades){
                    $scope.pessoaAtividades = pessoaAtividades;

               });
               console.log($scope.pessoaAtvidades);
               
               PessoaExperienciaProfissional.query({
                   search:'pessoa_id:'+$scope.pessoa.id}).$promise.then(function(pessoaExperienciasProfissionais){
                    $scope.pessoaExperienciasProfissionais = pessoaExperienciasProfissionais;
     
               console.log($scope.pessoaExperienciasProfissionais);
               })
               

                Municipio.query({
                    search: 'unidade_federacao_id:'+pessoa.municipio.data.unidade_federacao_id
                }).$promise.then(function(municipios) {
                        // success
                        $scope.municipios = municipios;
                        Bairro.query({
                            search: 'municipio_id:'+pessoa.municipio_id
                        }).$promise.then(function(bairros) {
                                // success
                                $scope.bairros = bairros;
                        

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
                        
                
                    }, function(errResponse) {
                        // fail
                    });

            }, function(errResponse) {
                // fail
            });
    }]);

