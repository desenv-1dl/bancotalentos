angular.module('app.services')
    .service('Util', ['$compile', 'appConfig', function($compile, appConfig){

        this.compileToAngular = function(scope, conteudo){
            var linkFunction = $compile(angular.element(conteudo));
                return linkFunction(scope)[0];
        }

    }]);


