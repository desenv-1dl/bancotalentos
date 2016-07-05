angular.module('app.controllers')
    .controller('FormacaoNewController',['$scope', '$location', 'Formacao', function($scope, $location, Formacao){

        $scope.formacao = new Formacao();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.formacao.$save().then(function (){
                    $location.path('/formacoes');
                });
            }

        }

    }]);
