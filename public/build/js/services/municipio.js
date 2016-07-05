angular.module('app.services')
    .service('Municipio', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/municipio/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);