angular.module('app.services')
    .service('PessoaDocumento', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/pessoa-documento/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);