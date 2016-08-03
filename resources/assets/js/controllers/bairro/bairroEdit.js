angular.module('app.controllers')
    .controller('BairroEditController',
        ['$scope', '$location', '$routeParams', 'Bairro','Municipio','UnidadeFederacao',
            function($scope, $location, $routeParams, Bairro,Municipio,UnidadeFederacao){
                $scope.bairro = Bairro.get({id: $routeParams.id});
                
                UnidadeFederacao.query().$promise.then(function(unidadesFederacao) {
                // success
                    $scope.unidadesFederacao = unidadesFederacao;
                    $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });

                }, function(errResponse) {
                // fail
                });
                Municipio.query().$promise.then(function(municipios) {
                // success
                    $scope.municipios = municipios;
                    $scope.municipios.unshift({ id: 0, nome: ' -- Selecione -- ' });

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
                            
                        }, function(errResponse) {
                        // fail
                        });
                    }

                $scope.save = function () {

                if($scope.form.$valid){
                    Bairro.update({id: $scope.bairro.id},$scope.bairro, function(){
                        $location.path('/bairros');
                    });
                }

            }

    }]);
