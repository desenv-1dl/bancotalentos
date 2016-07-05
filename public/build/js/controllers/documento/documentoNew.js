angular.module('app.controllers')
    .controller('DocumentoNewController',['$scope', '$location', 'Documento', function($scope, $location, Documento){

        $scope.documento = new Documento();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.documento.$save().then(function (){
                    $location.path('/documentos');
                });
            }

        }

    }]);
