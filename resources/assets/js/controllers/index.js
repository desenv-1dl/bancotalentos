angular.module('app.controllers')
    .controller('IndexController',['$scope', 'index', function($scope, index){

        $scope.morrisdonutchart = {
            data: [{
            label: "Oficiais com Mestrado",
            value: 08
        }, {
            label: "Oficiais com Doutorado",
            value: 01
        },
            {
            label: "Sem Mestrado/Doutorado",
            value: 02
        }
        ]
        
        };

//        $scope.gridOptions = {
//            data : $scope.pessoasAtividades,
//            enableFiltering: true,
//            controller: 'pessoas-atividades',
//            enableHiding: true,
//            columnDefs: [
//                { field: 'pessoa.data.organizacao.data.nome_abrev', displayName: "Idioma" },
//                { field: 'pessoa.data.nivelFuncional.data.nome', displayName: "Nivel Funcional" },
//                { field: 'pessoa.data.nome', displayName: "Pessoa" },
//                { field: 'atividade.data.nome', displayName: "Atividade" },
//                { field: 'instituicao.data.nome', displayName: "Instituição" },
//                { field: 'acoes', displayName: "Acoes", 
//                    enableFiltering:  false, enableSorting: false, width: 200,
//                    cellTemplate : '<menu-acao></menu-acao>'
//                }
//            ]
//        };
//
//        $scope.gridOptions.onRegisterApi = function(gridApi){
//            $scope.gridApi = gridApi;
//        };
//
//    }]);