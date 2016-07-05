angular.module('app.services')
    .service('PessoaAtividade', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/pessoa-atividade/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);