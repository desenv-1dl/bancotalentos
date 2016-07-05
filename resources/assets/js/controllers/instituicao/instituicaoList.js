angular.module('app.controllers')
    .controller('InstituicaoListController',['$scope', 'Instituicao', function($scope, Instituicao){

        $scope.instituicoes = Instituicao.query();

        $scope.gridOptions = {
            data : $scope.instituicoes,
            enableFiltering: true,
            controller: 'instituicoes',
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
