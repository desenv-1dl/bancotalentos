angular.module('app.controllers')
    .controller('OrganizacaoListController',['$scope', 'Organizacao', function($scope, Organizacao){

        $scope.organizacoes = Organizacao.query();

        $scope.gridOptions = {
            data : $scope.organizacoes,
            enableFiltering: true,
            controller: 'organizacoes',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'nome_abrev', displayName: "Sigla" },
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
