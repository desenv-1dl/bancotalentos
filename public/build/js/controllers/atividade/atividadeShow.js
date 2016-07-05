angular.module('app.controllers')
    .controller('AtividadeShowController',
        ['$scope', '$location', '$routeParams', 'Atividade',
            function($scope, $location, $routeParams, Atividade){

            $scope.atividade = Atividade.get({id: $routeParams.id});
    }]);
