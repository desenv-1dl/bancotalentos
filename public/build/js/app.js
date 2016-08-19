var app = angular.module('app', [
    
    'ngRoute', 'flash', 'ui-leaflet', 'ui.utils.masks', 'nemLogging', 'angular-oauth2',
    'app.controllers', 'app.services', 'app.filters',
    'ui.bootstrap.typeahead', 'ui.bootstrap.datepicker', 'ui.bootstrap', 'ui.bootstrap.tpls',
    'ui.grid', 'ui.grid.treeView', 'ngFileUpload','ngMask'
]);

angular.module('app.controllers', ['ngMessages', 'ngAnimate', 'angular-oauth2', 'ui-leaflet', 'ui.bootstrap']);

angular.module('app.filters', []);

angular.module('app.services', ['ngResource']);

//
app.directive('menuAcao', function() {
    return {
        restrict: 'E',
        replace: true,
        templateUrl: 'build/views/templates/dropdownGridCRUD.html'
    };
});

////MODULO DE TABELAS - INICIO
//angular.module('Sip',['smart-table']);
//
////MODULO DE TABELAS - FIM

app.directive('tableContato', function() {
    return {
        restrict: 'E',
        replace: true,
        templateUrl: 'build/views/templates/tableContato.html'
    };
});

app.directive('selectOption', function() {
    return {
        restrict: 'E',
        replace: true,
        templateUrl: function (elem, attr){
            return 'build/views/templates/selectOption.html';
        }
    };
});

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
            },
            go : function (path) {
                $location.path(path);
            },
            getDados : function (entidade, $variavelDeScopo, textoSearch) {
                return entidade.query({
                    search: textoSearch
                }).$promise.then(function(dados) {
                        // success

                        //console.log(dados);

                        $variavelDeScopo = dados;
                    }, function(errResponse) {
                        // fail
                    });
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
        .when('/mapa',{
            templateUrl: 'build/views/mapa.html',
            controller: 'MapaController'
        })
        .when('/login',{
            templateUrl: 'build/views/login.html',
            controller: 'LoginController'
        })
//        Tirando a pagina home do inicio do sistema
//        .when('/',{
//            templateUrl: 'build/views/home.html',
//            controller: 'HomeController'
//        })
        .when('/',{
            templateUrl: 'build/views/index.html',
            controller: 'IndexController'
        })
        .when('/index',{
            templateUrl: 'build/views/index.html',
            controller: 'IndexController'
        })
        .when('/home',{
            templateUrl: 'build/views/home.html',
            controller: 'HomeController'
        })
//        ATIVIDADE
        .when('/atividades',{
            templateUrl: 'build/views/atividade/list.html',
            controller: 'AtividadeListController'
        })
        .when('/atividades/:id/show',{
            templateUrl: 'build/views/atividade/show.html',
            controller: 'AtividadeShowController'
        })  
        .when('/atividades/new',{
            templateUrl: 'build/views/atividade/new.html',
            controller: 'AtividadeNewController'
        })
        .when('/atividades/:id/edit',{
            templateUrl: 'build/views/atividade/edit.html',
            controller: 'AtividadeEditController'
        })
        .when('/atividades/:id/remove',{
            templateUrl: 'build/views/atividade/remove.html',
            controller: 'AtividadeRemoveController'
        })
        
        //        MODALIDADE
        .when('/modalidades',{
            templateUrl: 'build/views/modalidade/list.html',
            controller: 'ModalidadeListController'
        })
        .when('/modalidades/:id/show',{
            templateUrl: 'build/views/modalidade/show.html',
            controller: 'ModalidadeShowController'
        })  
        .when('/modalidades/new',{
            templateUrl: 'build/views/modalidade/new.html',
            controller: 'ModalidadeNewController'
        })
        .when('/modalidades/:id/edit',{
            templateUrl: 'build/views/modalidade/edit.html',
            controller: 'ModalidadeEditController'
        })
        .when('/modalidades/:id/remove',{
            templateUrl: 'build/views/modalidade/remove.html',
            controller: 'ModalidadeRemoveController'
        })
        
        //        INSTITUIÇÃO
        .when('/instituicoes',{
            templateUrl: 'build/views/instituicao/list.html',
            controller: 'InstituicaoListController'
        })
        .when('/instituicoes/:id/show',{
            templateUrl: 'build/views/instituicao/show.html',
            controller: 'InstituicaoShowController'
        })  
        .when('/instituicoes/new',{
            templateUrl: 'build/views/instituicao/new.html',
            controller: 'InstituicaoNewController'
        })
        .when('/instituicoes/:id/edit',{
            templateUrl: 'build/views/instituicao/edit.html',
            controller: 'InstituicaoEditController'
        })
        .when('/instituicoes/:id/remove',{
            templateUrl: 'build/views/instituicao/remove.html',
            controller: 'InstituicaoRemoveController'
        })
        //        CONDECORACAO
        .when('/condecoracoes',{
            templateUrl: 'build/views/condecoracao/list.html',
            controller: 'CondecoracaoListController'
        })
        .when('/condecoracoes/:id/show',{
            templateUrl: 'build/views/condecoracao/show.html',
            controller: 'CondecoracaoShowController'
        })  
        .when('/condecoracoes/new',{
            templateUrl: 'build/views/condecoracao/new.html',
            controller: 'CondecoracaoNewController'
        })
        .when('/condecoracoes/:id/edit',{
            templateUrl: 'build/views/condecoracao/edit.html',
            controller: 'CondecoracaoEditController'
        })
        .when('/condecoracoes/:id/remove',{
            templateUrl: 'build/views/condecoracao/remove.html',
            controller: 'CondecoracaoRemoveController'
        })
        //        FORMACAO
        .when('/formacoes',{
            templateUrl: 'build/views/formacao/list.html',
            controller: 'FormacaoListController'
        })
        .when('/formacoes/new',{
            templateUrl: 'build/views/formacao/new.html',
            controller: 'FormacaoNewController'
        })
        .when('/formacoes/:id/edit',{
            templateUrl: 'build/views/formacao/edit.html',
            controller: 'FormacaoEditController'
        })
        .when('/formacoes/:id/remove',{
            templateUrl: 'build/views/formacao/remove.html',
            controller: 'FormacaoRemoveController'
        })
        .when('/formacoes/:id/show',{
            templateUrl: 'build/views/formacao/show.html',
            controller: 'FormacaoShowController'
        })
        
                
 //        GENEROS
        .when('/generos',{
            templateUrl: 'build/views/genero/list.html',
            controller: 'GeneroListController'
        })
        .when('/generos/new',{
            templateUrl: 'build/views/genero/new.html',
            controller: 'GeneroNewController'
        })
        .when('/generos/:id/edit',{
            templateUrl: 'build/views/genero/edit.html',
            controller: 'GeneroEditController'
        })
        .when('/generos/:id/remove',{
            templateUrl: 'build/views/genero/remove.html',
            controller: 'GeneroRemoveController'
        })
        .when('/generos/:id/show',{
            templateUrl: 'build/views/genero/show.html',
            controller: 'GeneroShowController'
        })
 //        PAISES
        .when('/paises',{
            templateUrl: 'build/views/pais/list.html',
            controller: 'PaisListController'
        })
        .when('/paises/new',{
            templateUrl: 'build/views/pais/new.html',
            controller: 'PaisNewController'
        })
        .when('/paises/:id/edit',{
            templateUrl: 'build/views/pais/edit.html',
            controller: 'PaisEditController'
        })
        .when('/paises/:id/remove',{
            templateUrl: 'build/views/pais/remove.html',
            controller: 'PaisRemoveController'
        })
        .when('/paises/:id/show',{
            templateUrl: 'build/views/pais/show.html',
            controller: 'PaisShowController'
        })

//        UNIDADES-FEDERACAO
        .when('/unidades-federacao',{
            templateUrl: 'build/views/unidade-federacao/list.html',
            controller: 'UnidadeFederacaoListController'
        })
        .when('/unidades-federacao/new',{
            templateUrl: 'build/views/unidade-federacao/new.html',
            controller: 'UnidadeFederacaoNewController'
        })
        .when('/unidades-federacao/:id/edit',{
            templateUrl: 'build/views/unidade-federacao/edit.html',
            controller: 'UnidadeFederacaoEditController'
        })
        .when('/unidades-federacao/:id/remove',{
            templateUrl: 'build/views/unidade-federacao/remove.html',
            controller: 'UnidadeFederacaoRemoveController'
        })
        .when('/unidades-federacao/:id/show',{
            templateUrl: 'build/views/unidade-federacao/show.html',
            controller: 'UnidadeFederacaoShowController'
        })        
        
        
        
       
        
//        BAIRRO
        .when('/bairros',{
            templateUrl: 'build/views/bairro/list.html',
            controller: 'BairroListController'
        })
        .when('/bairros/new',{
            templateUrl: 'build/views/bairro/new.html',
            controller: 'BairroNewController'
        })
        .when('/bairros/:id/edit',{
            templateUrl: 'build/views/bairro/edit.html',
            controller: 'BairroEditController'
        })
        .when('/bairros/:id/remove',{
            templateUrl: 'build/views/bairro/remove.html',
            controller: 'BairroRemoveController'
        })
        .when('/bairros/:id/show',{
            templateUrl: 'build/views/bairro/show.html',
            controller: 'BairroShowController'
        })

//        CONTATO
        .when('/contatos',{
            templateUrl: 'build/views/contato/list.html',
            controller: 'ContatoListController'
        })
        .when('/contatos/new',{
            templateUrl: 'build/views/contato/new.html',
            controller: 'ContatoNewController'
        })
        .when('/contatos/:id/edit',{
            templateUrl: 'build/views/contato/edit.html',
            controller: 'ContatoEditController'
        })
        .when('/contatos/:id/remove',{
            templateUrl: 'build/views/contato/remove.html',
            controller: 'ContatoRemoveController'
        })
        .when('/contatos/:id/show',{
            templateUrl: 'build/views/contato/show.html',
            controller: 'ContatoShowController'
        })
        
        
 //        DOCUMENTO
        .when('/documentos',{
            templateUrl: 'build/views/documento/list.html',
            controller: 'DocumentoListController'
        })
        .when('/documentos/new',{
            templateUrl: 'build/views/documento/new.html',
            controller: 'DocumentoNewController'
        })
        .when('/documentos/:id/edit',{
            templateUrl: 'build/views/documento/edit.html',
            controller: 'DocumentoEditController'
        })
        .when('/documentos/:id/remove',{
            templateUrl: 'build/views/documento/remove.html',
            controller: 'DocumentoRemoveController'
        })
        .when('/documentos/:id/show',{
            templateUrl: 'build/views/documento/show.html',
            controller: 'DocumentoShowController'
        })
        
 
   //        MUNICIPIO
        .when('/municipios',{
            templateUrl: 'build/views/municipio/list.html',
            controller: 'MunicipioListController'
        })
        .when('/municipios/new',{
            templateUrl: 'build/views/municipio/new.html',
            controller: 'MunicipioNewController'
        })
        .when('/municipios/:id/edit',{
            templateUrl: 'build/views/municipio/edit.html',
            controller: 'MunicipioEditController'
        })
        .when('/municipios/:id/remove',{
            templateUrl: 'build/views/municipio/remove.html',
            controller: 'MunicipioRemoveController'
        })
        .when('/municipios/:id/show',{
            templateUrl: 'build/views/municipio/show.html',
            controller: 'MunicipioShowController'
        })
 
  //        PESSOA
        .when('/pessoas',{
            templateUrl: 'build/views/pessoa/list.html',
            controller: 'PessoaListController'
        })
        .when('/pessoas/new',{
            templateUrl: 'build/views/pessoa/new.html',
            controller: 'PessoaNewController'
        })
        .when('/pessoas/:id/edit',{
            templateUrl: 'build/views/pessoa/edit.html',
            controller: 'PessoaEditController'
        })
        .when('/pessoas/:id/remove',{
            templateUrl: 'build/views/pessoa/remove.html',
            controller: 'PessoaRemoveController'
        })
        .when('/pessoas/:id/show',{
            templateUrl: 'build/views/pessoa/show.html',
            controller: 'PessoaShowController'
        })
        
        //        NIVEL FUNCIONAL
        .when('/niveis-funcionais',{
            templateUrl: 'build/views/nivel-funcional/list.html',
            controller: 'NivelFuncionalListController'
        })
        .when('/niveis-funcionais/new',{
            templateUrl: 'build/views/nivel-funcional/new.html',
            controller: 'NivelFuncionalNewController'
        })
        .when('/niveis-funcionais/:id/edit',{
            templateUrl: 'build/views/nivel-funcional/edit.html',
            controller: 'NivelFuncionalEditController'
        })
        .when('/niveis-funcionais/:id/remove',{
            templateUrl: 'build/views/nivel-funcional/remove.html',
            controller: 'NivelFuncionalRemoveController'
        })
        .when('/niveis-funcionais/:id/show',{
            templateUrl: 'build/views/nivel-funcional/show.html',
            controller: 'NivelFuncionalShowController'
        })
        
//        PESSOA-CONTATO
        .when('/pessoas-contatos',{
            templateUrl: 'build/views/pessoa-contato/list.html',
            controller: 'PessoaContatoListController'
        })
        .when('/pessoas-contatos/:id/new',{
            templateUrl: 'build/views/pessoa-contato/new.html',
            controller: 'PessoaContatoNewController'
        })
        .when('/pessoas-contatos/:id/edit',{
            templateUrl: 'build/views/pessoa-contato/edit.html',
            controller: 'PessoaContatoEditController'
        })
        .when('/pessoas-contatos/:id/remove',{
            templateUrl: 'build/views/pessoa-contato/remove.html',
            controller: 'PessoaContatoRemoveController'
        })
        .when('/pessoas-contatos/:id/show',{
            templateUrl: 'build/views/pessoa-contato/show.html',
            controller: 'PessoaContatoShowController'
        })
        
//        PESSOA-ATIVIDADE
        .when('/pessoas-atividades',{
            templateUrl: 'build/views/pessoa-atividade/list.html',
            controller: 'PessoaAtividadeListController'
        })
        .when('/pessoas-atividades/:id/new',{
            templateUrl: 'build/views/pessoa-atividade/new.html',
            controller: 'PessoaAtividadeNewController'
        })
        .when('/pessoas-atividades/:id/edit',{
            templateUrl: 'build/views/pessoa-atividade/edit.html',
            controller: 'PessoaAtividadeEditController'
        })
        .when('/pessoas-atividades/:id/remove',{
            templateUrl: 'build/views/pessoa-atividade/remove.html',
            controller: 'PessoaAtividadeRemoveController'
        })
        .when('/pessoas-atividades/:id/show',{
            templateUrl: 'build/views/pessoa-atividade/show.html',
            controller: 'PessoaAtividadeShowController'
        })
        
//PESSOA-CONDECORACAO
        .when('/pessoas-condecoracoes',{
            templateUrl: 'build/views/pessoa-condecoracao/list.html',
            controller: 'PessoaCondecoracaoListController'
        })
        .when('/pessoas-condecoracoes/:id/new',{
            templateUrl: 'build/views/pessoa-condecoracao/new.html',
            controller: 'PessoaCondecoracaoNewController'
        })
        .when('/pessoas-condecoracoes/:id/edit',{
            templateUrl: 'build/views/pessoa-condecoracao/edit.html',
            controller: 'PessoaCondecoracaoEditController'
        })
        .when('/pessoas-condecoracoes/:id/remove',{
            templateUrl: 'build/views/pessoa-condecoracao/remove.html',
            controller: 'PessoaCondecoracaoRemoveController'
        })
        .when('/pessoas-condecoracoes/:id/show',{
            templateUrl: 'build/views/pessoa-condecoracao/show.html',
            controller: 'PessoaCondecoracaoShowController'
        })
        
        
        //        ORGANIZACAO
        .when('/organizacoes',{
            templateUrl: 'build/views/organizacao/list.html',
            controller: 'OrganizacaoListController'
        })
        .when('/organizacoes/new',{
            templateUrl: 'build/views/organizacao/new.html',
            controller: 'OrganizacaoNewController'
        })
        .when('/organizacoes/:id/edit',{
            templateUrl: 'build/views/organizacao/edit.html',
            controller: 'OrganizacaoEditController'
        })
        .when('/organizacoes/:id/remove',{
            templateUrl: 'build/views/organizacao/remove.html',
            controller: 'OrganizacaoRemoveController'
        })
        .when('/organizacoes/:id/show',{
            templateUrl: 'build/views/organizacao/show.html',
            controller: 'OrganizacaoShowController'
        })
        
//EXPERIENCIA PROFISSIONAL
        .when('/experiencias-profissionais',{
            templateUrl: 'build/views/experiencia-profissional/list.html',
            controller: 'ExperienciaProfissionalListController'
        })
        .when('/experiencias-profissionais/new',{
            templateUrl: 'build/views/experiencia-profissional/new.html',
            controller: 'ExperienciaProfissionalNewController'
        })
        .when('/experiencias-profissionais/:id/edit',{
            templateUrl: 'build/views/experiencia-profissional/edit.html',
            controller: 'ExperienciaProfissionalEditController'
        })
        .when('/experiencias-profissionais/:id/remove',{
            templateUrl: 'build/views/experiencia-profissional/remove.html',
            controller: 'ExperienciaProfissionalRemoveController'
        })
        .when('/experiencias-profissionais/:id/show',{
            templateUrl: 'build/views/experiencia-profissional/show.html',
            controller: 'ExperienciaProfissionalShowController'
        })
        
//PESSOA EXPERIENCIA PROFISSIONAL
        .when('/pessoas-experiencias-profissionais',{
            templateUrl: 'build/views/pessoa-experiencia-profissional/list.html',
            controller: 'PessoaExperienciaProfissionalListController'
        })
        .when('/pessoas-experiencias-profissionais/:id/new',{
            templateUrl: 'build/views/pessoa-experiencia-profissional/new.html',
            controller: 'PessoaExperienciaProfissionalNewController'
        })
        .when('/pessoas-experiencias-profissionais/:id/edit',{
            templateUrl: 'build/views/pessoa-experiencia-profissional/edit.html',
            controller: 'PessoaExperienciaProfissionalEditController'
        })
        .when('/pessoas-experiencias-profissionais/:id/remove',{
            templateUrl: 'build/views/pessoa-experiencia-profissional/remove.html',
            controller: 'PessoaExperienciaProfissionalRemoveController'
        })
        .when('/pessoas-experiencias-profissionais/:id/show',{
            templateUrl: 'build/views/pessoa-experiencia-profissional/show.html',
            controller: 'PessoaExperienciaProfissionalShowController'
        })        
        

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
