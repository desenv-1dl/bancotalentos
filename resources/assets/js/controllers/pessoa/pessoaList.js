angular.module('app.controllers')
    .controller('PessoaListController',[
        '$scope', 'Pessoa', 'Flash',
        function($scope, Pessoa, Flash){

            //Flash.create('success', message, 0, 'custom-class');
            //Flash.create('danger', 'Perigo A coisa tá séria', 0);


        $scope.pessoas = Pessoa.query();

          $scope.gridOptions = {
            data : $scope.pessoas,
            enableFiltering: true,
            controller: 'pessoas',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'cpf', displayName: "CPF",cellTemplate:'<div>{{COL_FIELD | cpfcnpj}}</div>' },
                { field: 'formacao.data.nome', displayName: "Formação" },
                { field: 'organizacao.data.nome', displayName: "Organização" },
                { field: 'acoes', displayName: "Acoes", 
                    enableFiltering:  false, enableSorting: false, width: 200,
                    cellTemplate : '<menu-acao></menu-acao>'
                }
            ]
        }; //

        $scope.gridOptions.onRegisterApi = function(gridApi){
            $scope.gridApi = gridApi;
        };

    }]);
