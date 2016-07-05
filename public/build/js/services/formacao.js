angular.module('app.services')
    .service('Formacao', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/formacao/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);