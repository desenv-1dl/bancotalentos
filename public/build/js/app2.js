var app = angular.module('app', [
    'ngRoute', 'angular-oauth2', 'app.controllers', 'app.services', 'app.filters',
    'ui.bootstrap.typeahead', 'ui.bootstrap.datepicker', 'ui.bootstrap.tpls'
]);

angular.module('app.controllers', ['ngMessages', 'angular-oauth2']);

angular.module('app.filters', []);

angular.module('app.services', ['ngResource']);

app.provider('appConfig', ['$httpParamSerializerProvider', function($httpParamSerializerProvider){
    var config = {
        baseUrl:  'http://localhost:8000',
        project: {
            status: [
                {value: 1, label: 'Não Iniciado'},
                {value: 2, label: 'Iniciado'},
                {value: 3, label: 'Concluido'}
            ]
        },
        utils: {
            transformResponse : function (data, headers) {
                var headerGetter = headers();
                if(headerGetter['content-type'] == 'application/json' ||
                    headerGetter['content-type'] == 'text/json'){
                    var dataJson = JSON.parse(data);
                    if(dataJson.hasOwnProperty('data')){
                        dataJson = dataJson.data;
                    }
                    return dataJson;
                }
                return data;
            },
            transformRequest : function (data) {
                if (angular.isObject(data)) {
                    return $httpParamSerializerProvider.$get()(data);
                }
                return data;
            }
        }
    };

    return {
        config: config,
        $get: function(){
            return config;
        }
    };
}]);

app.config([
    '$routeProvider', '$httpProvider', 'OAuthProvider', 'OAuthTokenProvider', 'appConfigProvider',
    function($routeProvider, $httpProvider, OAuthProvider, OAuthTokenProvider, appConfigProvider){

    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
    $httpProvider.defaults.headers.put['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';

    $httpProvider.defaults.transformResponse = appConfigProvider.config.utils.transformResponse;
    $httpProvider.defaults.transformRequest = appConfigProvider.config.utils.transformRequest;

    $routeProvider
        .when('/login',{
            templateUrl: 'build/views/login.html',
            controller: 'LoginController'
        })
        .when('/home',{
            templateUrl: 'build/views/home.html',
            controller: 'HomeController'
        })
        .when('/profissoes',{
            templateUrl: 'build/views/profissao/list.html',
            controller: 'ProfissaoListController'
        })
        .when('/profissoes/new',{
            templateUrl: 'build/views/profissao/new.html',
            controller: 'ProfissaoNewController'
        })
        .when('/profissoes/:id/edit',{
            templateUrl: 'build/views/profissao/edit.html',
            controller: 'ProfissaoEditController'
        })
        .when('/profissoes/:id/remove',{
            templateUrl: 'build/views/profissao/remove.html',
            controller: 'ProfissaoRemoveController'
        })
        .when('/nacionalidades',{
            templateUrl: 'build/views/nacionalidade/list.html',
            controller: 'NacionalidadeListController'
        })
        .when('/nacionalidades/new',{
            templateUrl: 'build/views/nacionalidade/new.html',
            controller: 'NacionalidadeNewController'
        })
        .when('/nacionalidades/:id/edit',{
            templateUrl: 'build/views/nacionalidade/edit.html',
            controller: 'NacionalidadeEditController'
        })
        .when('/nacionalidades/:id/remove',{
            templateUrl: 'build/views/nacionalidade/remove.html',
            controller: 'NacionalidadeRemoveController'
        })
        .when('/status',{
            templateUrl: 'build/views/status/list.html',
            controller: 'StatusListController'
        })
        .when('/status/new',{
            templateUrl: 'build/views/status/new.html',
            controller: 'StatusNewController'
        })
        .when('/status/:id/edit',{
            templateUrl: 'build/views/status/edit.html',
            controller: 'StatusEditController'
        })
        .when('/status/:id/remove',{
            templateUrl: 'build/views/status/remove.html',
            controller: 'StatusRemoveController'
        })
        .when('/projetos',{
            templateUrl: 'build/views/projeto/list.html',
            controller: 'ProjetoListController'
        })
        .when('/projetos/new',{
            templateUrl: 'build/views/projeto/new.html',
            controller: 'ProjetoNewController'
        })
        .when('/projetos/:id/edit',{
            templateUrl: 'build/views/projeto/edit.html',
            controller: 'ProjetoEditController'
        })
        .when('/projetos/:id/remove',{
            templateUrl: 'build/views/projeto/remove.html',
            controller: 'ProjetoRemoveController'
        })
        .when('/clients',{
            templateUrl: 'build/views/client/list.html',
            controller: 'ClientListController'
        })
        .when('/clients/new',{
            templateUrl: 'build/views/client/new.html',
            controller: 'ClientNewController'
        })
        .when('/clients/:id/edit',{
            templateUrl: 'build/views/client/edit.html',
            controller: 'ClientEditController'
        })
        .when('/clients/:id/remove',{
            templateUrl: 'build/views/client/remove.html',
            controller: 'ClientRemoveController'
        })
        .when('/projects',{
            templateUrl: 'build/views/project/list.html',
            controller: 'ProjectListController'
        })
        .when('/projects/:id/show',{
            templateUrl: 'build/views/project/show.html',
            controller: 'ProjectEditController'
        })
        .when('/projects/new',{
            templateUrl: 'build/views/project/new.html',
            controller: 'ProjectNewController'
        })
        .when('/projects/:id/edit',{
            templateUrl: 'build/views/project/edit.html',
            controller: 'ProjectEditController'
        })
        .when('/projects/:id/remove',{
            templateUrl: 'build/views/project/remove.html',
            controller: 'ProjectRemoveController'
        })
        .when('/projects/:id/notes',{
            templateUrl: 'build/views/project-note/list.html',
            controller: 'ProjectNoteListController'
        })
        .when('/projects/:id/notes/:idNote/show',{
            templateUrl: 'build/views/project-note/show.html',
            controller: 'ProjectNoteEditController'
        })
        .when('/projects/:id/notes/new',{
            templateUrl: 'build/views/project-note/new.html',
            controller: 'ProjectNoteNewController'
        })
        .when('/projects/:id/notes/:idNote/edit',{
            templateUrl: 'build/views/project-note/edit.html',
            controller: 'ProjectNoteEditController'
        })
        .when('/projects/:id/notes/:idNote/remove',{
            templateUrl: 'build/views/project-note/remove.html',
            controller: 'ProjectNoteRemoveController'
        });

        OAuthProvider.configure({
            baseUrl: appConfigProvider.config.baseUrl,
            clientId: 'appid1',
            clientSecret: 'secret', // optional
            grantPath: 'oauth/access_token'
        });

        OAuthTokenProvider.configure({
            name: 'token',
            options: {
                secure: false
            }
        });
}]);

app.run(['$rootScope', '$window', 'OAuth', function($rootScope, $window, OAuth) {
    $rootScope.$on('oauth:error', function(event, rejection) {

        /*
        // Ignore `invalid_grant` error - should be catched on `LoginController`.
        if ('invalid_grant' === rejection.data.error) {
            return;
        }

        // Refresh token when a `invalid_token` error occurs.
        if ('invalid_token' === rejection.data.error) {
            return OAuth.getRefreshToken();
        }

        // Redirect to `/login` with the `error_reason`.
        return $window.location.href = '#/login?error_reason=' + rejection.data.error;
        */

    });
}]);