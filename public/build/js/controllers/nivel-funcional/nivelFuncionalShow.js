angular.module('app.controllers')
    .controller('NivelFuncionalShowController',
        ['$scope', '$location', '$routeParams', 'NivelFuncional',
            function($scope, $location, $routeParams, NivelFuncional){

            $scope.nivelFuncional = NivelFuncional.get({id: $routeParams.id});
    }]);
