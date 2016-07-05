angular.module('app.controllers')
    .controller('ModalidadeNewController',['$scope', '$location', 'Modalidade', function($scope, $location, Modalidade){

        $scope.modalidade = new Modalidade();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.modalidade.$save().then(function (){
                    $location.path('/modalidades');
                });
            }

        }

    }]);
