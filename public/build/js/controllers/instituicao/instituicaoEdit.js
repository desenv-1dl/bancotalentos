angular.module('app.controllers')
    .controller('InstituicaoEditController',
        ['$scope', '$location', '$routeParams', 'Instituicao',
            function($scope, $location, $routeParams, Instituicao){
            $scope.instituicao = Instituicao.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Instituicao.update({id: $scope.instituicao.id},$scope.instituicao, function(){
                        $location.path('/instituicoes');
                    });
                }

            }

    }]);
