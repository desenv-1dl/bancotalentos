angular.module('app.controllers')
    .controller('ModalidadeShowController',
        ['$scope', '$location', '$routeParams', 'Modalidade',
            function($scope, $location, $routeParams, Modalidade){

            $scope.modalidade = Modalidade.get({id: $routeParams.id});
    }]);
