angular.module('app.controllers')
    .controller('PessoaContatoListController',['$scope', 'PessoaContato', function($scope, PessoasContatos){

        $scope.pessoasContatos = PessoasContatos.query();

        $scope.gridOptions = {
            data : $scope.pessoasContatos,
            enableFiltering: true,
            controller: 'pessoas-contatos',
            enableHiding: true,
            columnDefs: [
                { field: 'pessoa', displayName: "Pessoa" },
                { field: 'contato', displayName: "Contato" },
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
