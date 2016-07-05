angular.module('app.controllers')
    .controller('AtividadeListController',['$scope', 'Atividade', function($scope, Atividade){

        $scope.atividades = Atividade.query();

        $scope.gridOptions = {
            data : $scope.atividades,
            enableFiltering: true,
            controller: 'atividades',
            enableHiding: true,
            columnDefs: [
                { field: 'codigo', displayName: "Código" },
                { field: 'nome', displayName: "Nome" },
                { field: 'idioma', displayName: "Idioma" },
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
