angular.module('app.controllers')
    .controller('ExperienciaProfissionalListController',['$scope', 'ExperienciaProfissional', function($scope, ExperienciaProfissional){

        $scope.experienciasProfissionais = ExperienciaProfissional.query();

        $scope.gridOptions = {
            data : $scope.experienciasProfissionais,
            enableFiltering: true,
            controller: 'experiencias-profissionais',
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
