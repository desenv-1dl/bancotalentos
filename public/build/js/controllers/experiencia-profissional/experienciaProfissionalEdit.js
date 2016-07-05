angular.module('app.controllers')
    .controller('ExperienciaProfissionalEditController',
        ['$scope', '$location', '$routeParams', 'ExperienciaProfissional',
            function($scope, $location, $routeParams, ExperienciaProfissional){
                $scope.experienciaProfissional = ExperienciaProfissional.get({id: $routeParams.id});

                $scope.save = function () {

                if($scope.form.$valid){
                    ExperienciaProfissional.update({id: $scope.experienciaProfissional.id},$scope.experienciaProfissional, function(){
                        $location.path('/experiencias-profissionais');
                    });
                }

            }

    }]);
