angular.module('app.services')
    .service('NivelFuncional', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/nivel-funcional/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);