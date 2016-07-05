angular.module('app.controllers')
    .controller('AtividadeNewController',['$scope', '$location', 'Atividade', function($scope, $location, Atividade){

        $scope.atividade = new Atividade();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.atividade.$save().then(function (){
                    $location.path('/atividades');
                });
            }

        }

    }]);
