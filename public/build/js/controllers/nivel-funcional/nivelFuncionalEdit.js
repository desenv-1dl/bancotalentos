angular.module('app.controllers')
    .controller('NivelFuncionalEditController',
        ['$scope', '$location', '$routeParams', 'NivelFuncional',
            function($scope, $location, $routeParams, NivelFuncional){
                $scope.nivelFuncional = NivelFuncional.get({id: $routeParams.id});

                $scope.save = function () {

                if($scope.form.$valid){
                    NivelFuncional.update({id: $scope.nivelFuncional.id},$scope.nivelFuncional, function(){
                        $location.path('/niveis-funcionais');
                    });
                }

            }

    }]);
