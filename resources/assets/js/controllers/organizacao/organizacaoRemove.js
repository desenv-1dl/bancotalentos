angular.module('app.controllers')
    .controller('OrganizacaoRemoveController',
        ['$scope', '$location', '$routeParams', 'Organizacao',
            function($scope, $location, $routeParams, Organizacao){

            $scope.organizacao = Organizacao.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.atividade.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/organizacoes');
                });
            }

    }]);
