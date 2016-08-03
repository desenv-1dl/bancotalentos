angular.module('app.controllers')
    .controller('PessoaRemoveController',
        ['$scope', '$location', '$routeParams', 'Pessoa',
            function($scope, $location, $routeParams, Pessoa){

            $scope.pessoa = Pessoa.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.pessoa.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/pessoas');
                });
            }

    }]);
