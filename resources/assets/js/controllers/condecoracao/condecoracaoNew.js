angular.module('app.controllers')
    .controller('CondecoracaoNewController',['$scope', '$location', 'Condecoracao', function($scope, $location, Condecoracao){

        $scope.condecoracao = new Condecoracao();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.condecoracao.$save().then(function (){
                    $location.path('/condecoracoes');
                });
            }

        }

    }]);
