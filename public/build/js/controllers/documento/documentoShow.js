angular.module('app.controllers')
    .controller('DocumentoShowController',
        ['$scope', '$location', '$routeParams', 'Documento',
            function($scope, $location, $routeParams, Documento){

            $scope.documento = Documento.get({id: $routeParams.id});
    }]);
