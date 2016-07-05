angular.module('app.controllers')
    .controller('NivelFuncionalListController',['$scope', 'NivelFuncional', function($scope, NivelFuncional){

        $scope.niveisFuncionais = NivelFuncional.query();
        

        $scope.gridOptions = {
            data : $scope.niveisFuncionais,
            enableFiltering: true,
            controller: 'niveis-funcionais',
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
