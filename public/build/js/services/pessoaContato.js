angular.module('app.services')
    .service('PessoaContato', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/pessoa-contato/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);