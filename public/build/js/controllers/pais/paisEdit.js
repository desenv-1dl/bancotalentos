angular.module('app.controllers')
    .controller('PaisEditController',
        ['$scope', '$location', '$routeParams', 'Pais',
            function($scope, $location, $routeParams, Pais){
            $scope.pais = Pais.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Pais.update({id: $scope.pais.id},$scope.pais, function(){
                        $location.path('/paises');
                    });
                }

            }

    }]);
