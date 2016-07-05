angular.module('app.controllers')
    .controller('ModalidadeRemoveController',
        ['$scope', '$location', '$routeParams', 'Modalidade',
            function($scope, $location, $routeParams, Modalidade){

            $scope.modalidade = Modalidade.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.modalidade.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/modalidades');
                });
            }

    }]);
