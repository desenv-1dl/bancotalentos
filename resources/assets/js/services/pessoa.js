angular.module('app.services')
    .service('Pessoa', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/pessoa/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);