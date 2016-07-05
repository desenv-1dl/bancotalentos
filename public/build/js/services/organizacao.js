angular.module('app.services')
    .service('Organizacao', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/organizacao/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);