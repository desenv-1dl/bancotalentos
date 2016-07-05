angular.module('app.services')
    .service('Instituicao', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/instituicao/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);