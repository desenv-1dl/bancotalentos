angular.module('app.controllers')
    .controller('CondecoracaoEditController',
        ['$scope', '$location', '$routeParams', 'Condecoracao',
            function($scope, $location, $routeParams, Condecoracao){
            $scope.condecoracao = Condecoracao.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Condecoracao.update({id: $scope.condecoracao.id},$scope.condecoracao, function(){
                        $location.path('/condecoracoes');
                    });
                }

            }

    }]);
