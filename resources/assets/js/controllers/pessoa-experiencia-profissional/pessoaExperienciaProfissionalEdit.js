angular.module('app.controllers')
    .controller('PessoaExperienciaProfissionalEditController',
        ['$scope', '$location', '$routeParams', 'PessoaExperienciaProfissional',
            function($scope, $location, $routeParams, PessoaExperienciaProfissional){
                $scope.pessoaExperienciaProfissional = PessoaExperienciaProfissional.get({id: $routeParams.id});

                $scope.save = function () {

                if($scope.form.$valid){
                    PessoaExperienciaProfissional.update({id: $scope.pessoaExperienciaProfissional.id},$scope.pessoaExperienciaProfissional, function(){
                        $location.path('/pessoas-experiencias-profissionais');
                    });
                }

            }

    }]);
