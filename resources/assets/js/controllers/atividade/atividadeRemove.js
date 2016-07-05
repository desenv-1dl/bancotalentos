angular.module('app.controllers')
    .controller('AtividadeRemoveController',
        ['$scope', '$location', '$routeParams', 'Atividade',
            function($scope, $location, $routeParams, Atividade){

            $scope.atividade = Atividade.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.atividade.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/atividades');
                });
            }

    }]);
