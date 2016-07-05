angular.module('app.services')
    .service('Genero', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/genero/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);