angular.module('app.controllers')
    .controller('FormacaoEditController',
        ['$scope', '$location', '$routeParams', 'Formacao',
            function($scope, $location, $routeParams, Formacao){
            $scope.formacao = Formacao.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Formacao.update({id: $scope.formacao.id},$scope.formacao, function(){
                        $location.path('/formacoes');
                    });
                }

            }

    }]);
