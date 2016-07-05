angular.module('app.services')
    .service('Pais', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/pais/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);