angular.module('app.controllers')
    .controller('ExperienciaProfissionalShowController',
        ['$scope', '$location', '$routeParams', 'ExperienciaProfissional',
            function($scope, $location, $routeParams, ExperienciaProfissional){

            $scope.experienciaProfissional = ExperienciaProfissional.get({id: $routeParams.id});
    }]);
