angular.module('app.controllers')
    .controller('BairroRemoveController',
        ['$scope', '$location', '$routeParams', 'Bairro',
            function($scope, $location, $routeParams, Bairro){

            $scope.bairro = Bairro.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.bairro.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/bairros');
                });
            }

    }]);
