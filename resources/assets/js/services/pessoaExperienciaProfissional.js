angular.module('app.services')
    .service('PessoaExperienciaProfissional', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/pessoa-experiencia-profissional/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);