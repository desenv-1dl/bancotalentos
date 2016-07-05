angular.module('app.services')
    .service('Documento', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/documento/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);