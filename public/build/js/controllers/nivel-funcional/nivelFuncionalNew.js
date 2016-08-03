angular.module('app.controllers')
    .controller('NivelFuncionalNewController',['$scope', '$location', 'NivelFuncional', function($scope, $location, NivelFuncional){

        $scope.nivelFuncional = new NivelFuncional();
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.nivelFuncional.$save().then(function (){
                    $location.path('/niveis-funcionais');
                });
            }

        }

    }]);
