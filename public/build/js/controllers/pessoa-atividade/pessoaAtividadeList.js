angular.module('app.controllers')
    .controller('PessoaAtividadeListController',['$scope', 'PessoaAtividade', function($scope, PessoasAtividades){

        $scope.pessoasAtividades = PessoasAtividades.query();

        $scope.gridOptions = {
            data : $scope.pessoasAtividades,
            enableFiltering: true,
            controller: 'pessoas-atividades',
            enableHiding: true,
            columnDefs: [
                { field: 'pessoa.data.organizacao.data.nome_abrev', displayName: "Idioma" },
                { field: 'pessoa.data.nivelFuncional.data.nome', displayName: "Posto/Grad" },
                { field: 'pessoa.data.nome', displayName: "Pessoa" },
                { field: 'atividade.data.nome', displayName: "Atividade" },
                { field: 'instituicao.data.nome', displayName: "Instituição" },
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
