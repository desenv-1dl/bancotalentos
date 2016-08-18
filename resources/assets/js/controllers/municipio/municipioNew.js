angular.module('app.controllers')
    .controller('MunicipioNewController',[
                '$scope', '$location', 'Municipio','UnidadeFederacao',
                function($scope, $location, Municipio,UnidadeFederacao){

        $scope.municipio = new Municipio();
        UnidadeFederacao.query().$promise.then(function(unidadesFederacao) {
                // success
                $scope.unidadesFederacao = unidadesFederacao;
                $scope.unidadesFederacao.unshift({ id: 0, nome: ' -- Selecione -- ' });
                //$scope.pais_id = 0;
            }, function(errResponse) {
                // fail
            });
        
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.municipio.$save().then(function (){
                    $location.path('/municipios');
                });
            }

        }

    }]);
