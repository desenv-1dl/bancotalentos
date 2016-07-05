angular.module('app.services')
    .service('Contato', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/contato/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);