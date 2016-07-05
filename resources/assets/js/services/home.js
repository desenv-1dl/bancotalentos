angular.module('app.services')
    .service('Home', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/home/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);