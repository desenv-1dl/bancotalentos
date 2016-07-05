angular.module('app.services')
    .service('UnidadeFederacao', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/unidade-federacao/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);