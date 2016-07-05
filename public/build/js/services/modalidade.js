angular.module('app.services')
    .service('Modalidade', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/modalidade/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);