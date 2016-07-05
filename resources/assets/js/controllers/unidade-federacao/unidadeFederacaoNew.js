angular.module('app.controllers')
    .controller('UnidadeFederacaoNewController',[
                '$scope', '$location', 'UnidadeFederacao','Pais',
                function($scope, $location, UnidadeFederacao,Pais){

        $scope.unidadeFederacao = new UnidadeFederacao();
        Pais.query().$promise.then(function(paises) {
                // success
                $scope.paises = paises;
                $scope.paises.unshift({ id: 0, nome: ' -- Selecione -- ' });
                //$scope.pais_id = 0;
            }, function(errResponse) {
                // fail
            });
        
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.unidadeFederacao.$save().then(function (){
                    $location.path('/unidades-federacao');
                });
            }

        }

    }]);
