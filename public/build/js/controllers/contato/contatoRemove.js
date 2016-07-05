angular.module('app.controllers')
    .controller('ContatoRemoveController',
        ['$scope', '$location', '$routeParams', 'Contato',
            function($scope, $location, $routeParams, Contato){

            $scope.contato = Contato.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.contato.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/contatos');
                });
            }

    }]);
