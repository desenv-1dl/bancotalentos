angular.module('app.controllers')
    .controller('UnidadeFederacaoListController',['$scope', 'UnidadeFederacao','Pais', function($scope, UnidadeFederacao,Pais){

        $scope.unidadesFederacao = UnidadeFederacao.query();
        $scope.pais = Pais.query();
        

        $scope.gridOptions = {
            data : $scope.unidadesFederacao,
            enableFiltering: true,
            controller: 'unidades-federacao',
            enableHiding: true,
            columnDefs: [
                { field: 'nome', displayName: "Nome" },
                { field: 'sigla', displayName: "Sigla" },
                { field: 'pais.data.nome', displayName: "País" },
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
