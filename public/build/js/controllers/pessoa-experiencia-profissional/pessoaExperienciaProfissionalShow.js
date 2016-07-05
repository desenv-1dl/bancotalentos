angular.module('app.controllers')
    .controller('PessoaExperienciaProfissionalShowController',
        ['$scope', '$location', '$routeParams', 'PessoaExperienciaProfissional',
            function($scope, $location, $routeParams, PessoaExperienciaProfissional){

            $scope.pessoaExperienciaProfissional = PessoaExperienciaProfissional.get({id: $routeParams.id});
    }]);
