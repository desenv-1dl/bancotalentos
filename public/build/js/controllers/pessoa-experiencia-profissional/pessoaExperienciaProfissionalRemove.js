angular.module('app.controllers')
    .controller('PessoaExperienciaProfissionalRemoveController',
        ['$scope', '$location', '$routeParams', 'PessoaExperienciaProfissional',
            function($scope, $location, $routeParams, PessoaExperienciaProfissional){

            $scope.pessoaExperienciaProfissional = PessoaExperienciaProfissional.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.pessoaExperienciaProfissional.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/pessoas-experiencias-profissionais');
                });
            }

    }]);
