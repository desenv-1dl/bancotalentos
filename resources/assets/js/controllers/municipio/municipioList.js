angular.module('app.controllers')
    .controller('MunicipioListController',['$scope', 'Municipio','UnidadeFederacao', function($scope, Municipio,UnidadeFederacao){

        $scope.municipios = Municipio.query();
        $scope.unidadeFederacao = UnidadeFederacao.query();
        

        $scope.gridOptions = {
            data : $scope.municipios,
            enableFiltering: true,
            controller: 'municipios',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'sigla', displayName: "Sigla" },
                { field: 'unidadeFederacao.data.nome', displayName: "UF" },
                { field: 'acoes', displayName: "Acoes", 
                    enableFiltering:  false, enableSorting: false, width: 200,
                    cellTemplate : '<menu-acao></menu-acao>'
                }
            ]
        };
        $scope.gridOptions.onRegisterApi = function(gridApi){
            $scope.gridApi = gridApi;
        };

    }]);
