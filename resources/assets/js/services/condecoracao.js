angular.module('app.services')
    .service('Condecoracao', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/condecoracao/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);