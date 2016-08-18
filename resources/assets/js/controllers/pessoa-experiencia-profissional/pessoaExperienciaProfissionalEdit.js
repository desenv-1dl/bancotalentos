angular.module('app.controllers')
    .controller('PessoaExperienciaProfissionalEditController',
        ['$scope', '$filter','$location', '$routeParams', 'PessoaExperienciaProfissional','Pessoa','ExperienciaProfissional','NivelFuncional',
            function($scope,$filter, $location, $routeParams, PessoaExperienciaProfissional,Pessoa,ExperienciaProfissional,NivelFuncional){
                
                PessoaExperienciaProfissional.get({id: $routeParams.id}).$promise.then(function(pessoaExperienciaProfissional){
                    $scope.pessoaExperienciaProfissional = pessoaExperienciaProfissional;
                    $scope.pessoaExperienciaProfissional.data_inicio = $filter('date')($scope.pessoaExperienciaProfissional.data_inicio, "dd/MM/yyyy");
                    $scope.pessoaExperienciaProfissional.data_fim = $filter('date')($scope.pessoaExperienciaProfissional.data_fim, "dd/MM/yyyy");
                    
                    Pessoa.query({
                    search:'id:'+$scope.pessoaExperienciaProfissional.pessoa_id}).$promise.then(function(pessoa){
                        $scope.pessoa = pessoa;
                        
                    });
                });
                
                
                
                
                ExperienciaProfissional.query().$promise.then(function(experienciasProfissionais) {
                // success
                    $scope.experienciasProfissionais = experienciasProfissionais;
                    $scope.experienciasProfissionais.unshift({ id: 0, nome: ' -- Selecione -- ' });
                
                }, function(errResponse) {
                    // fail
                });
//                
//                NivelFuncional.query().$promise.then(function(niveisFuncionais) {
//                // success
//                    $scope.niveisFuncionais = niveisFuncionais;
//                    $scope.niveisFuncionais.unshift({ id: 0, nome: ' -- Selecione -- ' });
//                
//                }, function(errResponse) {
//                    // fail
//                });
                
//                Pessoa.query({
//                    search:'id:'+$scope.pessoaExperienciaProfissional.pessoa_id}).$promise.then(function(pessoa){
//                        $scope.pessoa = pessoa;
//                        
//                    });

                $scope.save = function () {

                if($scope.form.$valid){
                    PessoaExperienciaProfissional.update({id: $scope.pessoaExperienciaProfissional.id},$scope.pessoaExperienciaProfissional, function(){
                        $location.path('/pessoas-experiencias-profissionais');
                    });
                }

            }

    }]);
