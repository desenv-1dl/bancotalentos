angular.module('app.controllers')
    .controller('BairroListController',['$scope', 'Bairro','Municipio', function($scope, Bairro,Municipio){

        $scope.bairros = Bairro.query();

        $scope.gridOptions = {
            data : $scope.bairros,
            enableFiltering: true,
            controller: 'bairros',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'sigla', displayName: "Sigla" },
                { field: 'municipio.data.nome', displayName: "Município" },
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
