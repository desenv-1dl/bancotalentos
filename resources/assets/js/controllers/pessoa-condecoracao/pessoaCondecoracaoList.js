angular.module('app.controllers')
    .controller('PessoaCondecoracaoListController',['$scope', 'PessoaCondecoracao', function($scope, PessoaCondecoracao){

        $scope.pessoasCondecoracoes = PessoaCondecoracao.query();

        $scope.gridOptions = {
            data : $scope.pessoasCondecoracoes,
            enableFiltering: true,
            controller: 'pessoas-condecoracoes',
            enableHiding: true,
            columnDefs: [
                { field: 'pessoa.data.nome', displayName: "Pessoa" },
                { field: 'condecoracao.data.nome', displayName: "Condecoracao" },
                { field: 'data_indicacao', displayName: "Data de Indicação",cellTemplate:'<div>{{COL_FIELD | dateBr}}</div>'},
                { field: 'data_condecoracao', displayName: "Data de Condecoração",cellTemplate:'<div>{{COL_FIELD | dateBr}}</div>'},
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
