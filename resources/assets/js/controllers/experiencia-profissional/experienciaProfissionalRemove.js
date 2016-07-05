angular.module('app.controllers')
    .controller('ExperienciaProfissionalRemoveController',
        ['$scope', '$location', '$routeParams', 'ExperienciaProfissional',
            function($scope, $location, $routeParams, ExperienciaProfissional){

            $scope.experienciaProfissional = ExperienciaProfissional.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.experienciaProfissional.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/experiencias-profissionais');
                });
            }

    }]);
