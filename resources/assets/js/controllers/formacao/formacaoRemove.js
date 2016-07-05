angular.module('app.controllers')
    .controller('FormacaoRemoveController',
        ['$scope', '$location', '$routeParams', 'Formacao',
            function($scope, $location, $routeParams, Formacao){

            $scope.formacao = Formacao.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.formacao.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/formacoes');
                });
            }

    }]);
