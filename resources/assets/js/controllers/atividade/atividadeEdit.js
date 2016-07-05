angular.module('app.controllers')
    .controller('AtividadeEditController',
        ['$scope', '$location', '$routeParams', 'Atividade',
            function($scope, $location, $routeParams, Atividade){
                $scope.atividade = Atividade.get({id: $routeParams.id});

                $scope.save = function () {

                if($scope.form.$valid){
                    Atividade.update({id: $scope.atividade.id},$scope.atividade, function(){
                        $location.path('/atividades');
                    });
                }

            }

    }]);
