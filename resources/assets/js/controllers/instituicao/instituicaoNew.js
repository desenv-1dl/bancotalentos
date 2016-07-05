angular.module('app.controllers')
    .controller('InstituicaoNewController',['$scope', '$location', 'Instituicao', function($scope, $location, Instituicao){

        $scope.instituicao = new Instituicao();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.instituicao.$save().then(function (){
                    $location.path('/instituicoes');
                });
            }

        }

    }]);
