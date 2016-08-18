angular.module('app.services')
    .service('ExperienciaProfissional', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/experiencia-profissional/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);