angular.module('app.controllers')
    .controller('DocumentoRemoveController',
        ['$scope', '$location', '$routeParams', 'Documento',
            function($scope, $location, $routeParams, Documento){

            $scope.documento = Documento.get({id: $routeParams.id});


            $scope.remove = function () {

                $scope.documento.$delete({id: $routeParams.id}).then( function() {
                    $location.path('/documentos');
                });
            }

    }]);
