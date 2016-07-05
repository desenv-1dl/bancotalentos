angular.module('app.controllers')
    .controller('ModalidadeListController',['$scope', 'Modalidade', function($scope, Modalidade){

        $scope.modalidades = Modalidade.query();

        $scope.gridOptions = {
            data : $scope.modalidades,
            enableFiltering: true,
            controller: 'modalidades',
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
