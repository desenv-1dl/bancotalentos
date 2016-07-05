angular.module('app.services')
    .service('PessoaCondecoracao', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/pessoa-condecoracao/:id', {id: '@id'}, {
            update: {
                method: 'PUT'
            }
        });
    }]);