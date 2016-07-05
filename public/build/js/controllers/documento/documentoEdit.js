angular.module('app.controllers')
    .controller('DocumentoEditController',
        ['$scope', '$location', '$routeParams', 'Documento',
            function($scope, $location, $routeParams, Documento){
            $scope.documento = Documento.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Documento.update({id: $scope.documento.id},$scope.documento, function(){
                        $location.path('/documentos');
                    });
                }

            }

    }]);
