angular.module('app.controllers')
    .controller('PaisListController',['$scope', 'Pais', function($scope, Pais){

        $scope.paises = Pais.query();

        $scope.gridOptions = {
            data : $scope.paises,
            enableFiltering: true,
            controller: 'paises',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'sigla', displayName: "sigla" },
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
