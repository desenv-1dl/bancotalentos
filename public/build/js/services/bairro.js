angular.module('app.services')
    .service('Bairro', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/bairro/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);