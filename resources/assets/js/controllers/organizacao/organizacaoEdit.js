angular.module('app.controllers')
    .controller('OrganizacaoEditController',
        ['$scope', '$location', '$routeParams', 'Organizacao',
            function($scope, $location, $routeParams, Organizacao){
                $scope.organizacao = Organizacao.get({id: $routeParams.id});

                $scope.save = function () {

                if($scope.form.$valid){
                    Organizacao.update({id: $scope.organizacao.id},$scope.organizacao, function(){
                        $location.path('/organizacoes');
                    });
                }

            }

    }]);
