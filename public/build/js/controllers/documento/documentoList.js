angular.module('app.controllers')
    .controller('DocumentoListController',['$scope', 'Documento', function($scope, Documento){

        $scope.documentos = Documento.query();

$scope.gridOptions = {
            data : $scope.documentos,
            enableFiltering: true,
            controller: 'documentos',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'orgao_expedidor', displayName: "Órgão Expedidor" },
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
