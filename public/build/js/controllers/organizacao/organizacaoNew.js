angular.module('app.controllers')
    .controller('OrganizacaoNewController',['$scope', '$location', 'Organizacao', function($scope, $location, Organizacao){

        $scope.organizacao = new Organizacao();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.organizacao.$save().then(function (){
                    $location.path('/organizacoes');
                });
            }

        }

    }]);
