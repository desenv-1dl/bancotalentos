angular.module('app.controllers')
    .controller('InstituicaoShowController',
        ['$scope', '$location', '$routeParams', 'Instituicao',
            function($scope, $location, $routeParams, Instituicao){

            $scope.instituicao = Instituicao.get({id: $routeParams.id});
    }]);
