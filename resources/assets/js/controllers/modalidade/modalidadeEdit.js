angular.module('app.controllers')
    .controller('ModalidadeEditController',
        ['$scope', '$location', '$routeParams', 'Modalidade',
            function($scope, $location, $routeParams, Modalidade){
            $scope.modalidade = Modalidade.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Modalidade.update({id: $scope.modalidade.id},$scope.modalidade, function(){
                        $location.path('/modalidades');
                    });
                }

            }

    }]);
