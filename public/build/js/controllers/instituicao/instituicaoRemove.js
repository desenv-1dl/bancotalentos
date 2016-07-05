angular.module('app.controllers')
    .controller('InstituicaoRemoveController',
        ['$scope', '$location', '$routeParams', 'Instituicao',
            function($scope, $location, $routeParams, Instituicao){

            $scope.instituicao = Instituicao.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.instituicao.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/instituicoes');
                });
            }

    }]);
