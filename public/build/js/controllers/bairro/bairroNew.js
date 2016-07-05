angular.module('app.controllers')
    .controller('BairroNewController',[
                '$scope', '$location', 'Bairro','Municipio','UnidadeFederacao',
                function($scope, $location, Bairro,Municipio,UnidadeFederacao){

                    $scope.bairro = new Bairro();
        
                    //$scope.municipios = [];

                    UnidadeFederacao.query().$promise.then(function(unidadesFederacao) {
                    // success
                        $scope.unidadesFederacao = unidadesFederacao;
                        $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });
                        $scope.unidade_federacao_id = 0;
                    }, function(errResponse) {
                        // fail
                    });
                    
//                    $scope.getMunicipios = function(){
//                        var id = $scope.unidade_federacao_id;
//                        
//                        Municipio.query({
//                        search: 'unidade_federacao_id:'+id
//                        }).$promise.then(function(municipios) {
//                        // success
//                            $scope.municipios = municipios;
//                            $scope.municipios.unshift({ id: 0, nome: ' -- Selecione -- ' });
//                            
//                        }, function(errResponse) {
//                        // fail
//                        });
//                    }
                    $scope.save = function () {
                        if($scope.form.$valid){
                            $scope.bairro.$save().then(function (){
                                $location.path('/bairros');
                            });
                        }

                    }

    }]);
