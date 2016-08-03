angular.module('app.controllers')
    .controller('MunicipioEditController',
        ['$scope', '$location', '$routeParams', 'Municipio','UnidadeFederacao',
            function($scope, $location, $routeParams, Municipio, UnidadeFederacao){
            $scope.municipio = Municipio.get({id: $routeParams.id});
            
            UnidadeFederacao.query().$promise.then(function(unidadesFederacao) {
                // success
                $scope.unidadesFederacao = unidadesFederacao;
                $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });

            }, function(errResponse) {
                // fail
            });

            $scope.save = function () {

                if($scope.form.$valid){
                    Municipio.update({id: $scope.municipio.id},$scope.municipio, function(){
                        $location.path('/municipios');
                    });
                }

            }

    }]);
