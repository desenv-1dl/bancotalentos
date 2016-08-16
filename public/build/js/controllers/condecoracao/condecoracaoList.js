angular.module('app.controllers')
    .controller('CondecoracaoListController',['$scope', 'Condecoracao', function($scope, Condecoracao){

        $scope.condecoracoes = Condecoracao.query();

        $scope.gridOptions = {
            data : $scope.condecoracoes,
            enableFiltering: true,
            controller: 'condecoracoes',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'nome_abrev', displayName: "Sigla/Código" },
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
