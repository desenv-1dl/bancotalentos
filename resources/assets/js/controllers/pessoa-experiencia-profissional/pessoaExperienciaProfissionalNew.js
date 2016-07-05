angular.module('app.controllers')
    .controller('PessoaExperienciaProfissionalNewController',['$scope', '$location','$routeParams', 'PessoaExperienciaProfissional','Pessoa','ExperienciaProfissional',
                function($scope, $location, $routeParams, PessoaExperienciaProfissional,Pessoa,ExperienciaProfissional){
        
        
        
        Pessoa.get({id: $routeParams.id}).$promise.then(function(pessoa) {
            // success
            $scope.pessoa =  pessoa;
            $scope.pessoaExperienciaProfissional.pessoa_id = $scope.pessoa.id;
        });
                    
        $scope.pessoaExperienciaProfissional = new PessoaExperienciaProfissional();
        

        ExperienciaProfissional.query().$promise.then(function(experienciasProfissionais) {
                // success
                $scope.experienciasProfissionais = experienciasProfissionais;
                $scope.experienciasProfissionais.unshift({ id: 0, nome: ' -- Selecione -- ' });
                $scope.pessoaExperienciaProfissional.experiencia_profissional_id = 0;
            }, function(errResponse) {
                // fail
         });
         
                 
        
        $scope.save = function () {

            if($scope.form.$valid){
                $scope.pessoaExperienciaProfissional.$save().then(function (){
                    $location.path('/pessoas/'+$scope.pessoa.id+'/edit');
                });
            }

        };
    }]);
