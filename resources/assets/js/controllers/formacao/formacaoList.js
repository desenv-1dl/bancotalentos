angular.module('app.controllers')
    .controller('FormacaoListController',['$scope', 'Formacao', function($scope, Formacao){

        $scope.formacoes = Formacao.query();

$scope.gridOptions = {
            data : $scope.formacoes,
            enableFiltering: true,
            controller: 'formacoes',
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
