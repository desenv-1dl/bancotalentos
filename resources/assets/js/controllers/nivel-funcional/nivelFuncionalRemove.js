angular.module('app.controllers')
    .controller('NivelFuncionalRemoveController',
        ['$scope', '$location', '$routeParams', 'NivelFuncional',
            function($scope, $location, $routeParams, NivelFuncional){

            $scope.nivelFuncional = NivelFuncional.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.nivelFuncional.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/niveis-funcionais');
                });
            }

    }]);
