angular.module('app.controllers')
    .controller('UnidadeFederacaoEditController',
        ['$scope', '$location', '$routeParams', 'UnidadeFederacao','Pais',
            function($scope, $location, $routeParams, UnidadeFederacao, Pais){
            $scope.unidadeFederacao = UnidadeFederacao.get({id: $routeParams.id});
            
            Pais.query().$promise.then(function(paises) {
                // success
                $scope.paises = paises;
                $scope.paises.unshift({ id: 0, nome: ' -- Selecione -- ' });

            }, function(errResponse) {
                // fail
            });

            $scope.save = function () {

                if($scope.form.$valid){
                    UnidadeFederacao.update({id: $scope.unidadeFederacao.id},$scope.unidadeFederacao, function(){
                        $location.path('/unidades-federacao');
                    });
                }

            }

    }]);
