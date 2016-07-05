angular.module('app.controllers')
    .controller('CondecoracaoRemoveController',
        ['$scope', '$location', '$routeParams', 'Condecoracao',
            function($scope, $location, $routeParams, Condecoracao){

            $scope.condecoracao = Condecoracao.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.condecoracao.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/condecoracoes');
                });
            }

    }]);
