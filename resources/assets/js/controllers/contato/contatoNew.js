angular.module('app.controllers')
    .controller('ContatoNewController',['$scope', '$location', 'Contato', function($scope, $location, Contato){

        $scope.contato = new Contato();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.contato.$save().then(function (){
                    $location.path('/contatos');
                });
            }

        }

    }]);
