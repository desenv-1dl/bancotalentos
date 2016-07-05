angular.module('app.services')
    .service('Atividade', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/atividade/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);