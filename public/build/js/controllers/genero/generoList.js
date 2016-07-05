angular.module('app.controllers')
    .controller('GeneroListController',['$scope', 'Genero', function($scope, Genero){

        $scope.generos = Genero.query();

        $scope.gridOptions = {
            data : $scope.generos,
            enableFiltering: true,
            controller: 'generos',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'nome_abrev', displayName: "Abreviatura" },
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
