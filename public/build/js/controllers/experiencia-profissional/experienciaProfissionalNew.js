angular.module('app.controllers')
    .controller('ExperienciaProfissionalNewController',['$scope', '$location', 'ExperienciaProfissional', function($scope, $location, ExperienciaProfissional){

        $scope.experienciaProfissional = new ExperienciaProfissional();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.experienciaProfissional.$save().then(function (){
                    $location.path('/experiencias-profissionais');
                });
            }

        }

    }]);
