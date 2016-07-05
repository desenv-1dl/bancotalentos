angular.module('app.services')
    .service('Index', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/index/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);