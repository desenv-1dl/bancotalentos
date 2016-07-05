angular.module('app.controllers')
    .controller('UnidadeFederacaoRemoveController',
        ['$scope', '$location', '$routeParams', 'UnidadeFederacao',
            function($scope, $location, $routeParams, UnidadeFederacao){

            $scope.unidadeFederacao = UnidadeFederacao.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.unidadeFederacao.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/unidades-federacao');
                });
            }

    }]);
