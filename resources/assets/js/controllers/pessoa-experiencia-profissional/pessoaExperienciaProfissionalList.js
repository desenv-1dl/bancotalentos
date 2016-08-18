angular.module('app.controllers')
    .controller('PessoaExperienciaProfissionalListController',['$scope', 'PessoaExperienciaProfissional', function($scope, PessoaExperienciaProfissional){

        $scope.pessoasExperienciasProfissionais = PessoaExperienciaProfissional.query();

        $scope.gridOptions = {
            data : $scope.pessoasExperienciasProfissionais,
            enableFiltering: true,
            controller: 'pessoas-experiencias-profissionais',
            enableHiding: true,
            columnDefs: [
                { field: 'pessoa.data.nivelFuncional.data.nome_abrev', displayName: "Nivel Funcional" },
                { field: 'pessoa.data.nome', displayName: "Pessoa" },
                { field: 'experienciaProfissional.data.nome', displayName: "Experiencia Profissional" },
                { field: 'data_inicio', displayName: "Data de Inicio",cellTemplate:'<div>{{COL_FIELD | dateBr}}</div>' },
                { field: 'data_fim', displayName: "Data de Fim",cellTemplate:'<div>{{COL_FIELD | dateBr}}</div>' },
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
