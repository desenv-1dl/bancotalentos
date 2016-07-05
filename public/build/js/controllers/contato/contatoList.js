angular.module('app.controllers')
    .controller('ContatoListController',['$scope', 'Contato', function($scope, Contato){

        $scope.contatos = Contato.query();

        $scope.gridOptions = {
            data : $scope.contatos,
            enableFiltering: true,
            controller: 'contatos',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
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
