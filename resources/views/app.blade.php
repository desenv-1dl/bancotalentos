<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Informação de Pessoas</title>
        @if(Config::get('app.debug'))
        <link href="{{ asset('build/css/app.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/components.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/flaticon.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/fonts.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/ui-grid.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/angular-flash.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/leaflet.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/leaflet.fullscreen.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/leaflet.label.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/leaflet.draw.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/leaflet.fusesearch.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/leaflet.measurecontrol.css')}}" rel="stylesheet" />
        <link href="{{ asset('build/css/vendor/leaflet.fullscreen.css')}}" rel="stylesheet" />
        @else
        <link href="{{ elixir('css/all.css')}}" rel="stylesheet" />
        @endif

        <!-- Fonts -->
        <!-- COMENT FONTS
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- Google Maps -->
        <!-- COMENT GOOGLE MAPS
        <script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>
        -->
    </head>
    <body>
        <nav class="navbar navbar-inverse" style="background: #2F4F4F" >
            <div class="container-fluid">
                <div class="navbar-header col-md-4">
                    <!--COMENTARIO - NAO ESTOU UTILIZANDO
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                    -->
                    <div class="col-md-4">
                        <a  href="#"><img src="build/images/logo_1dl.png" class="img-rounded" style="width: 100%;height: 100%"/></a>
                    </div>
                    <div class="col-md-6">
                        <h5 style="color: white; text-align: left"><strong> Banco de Talentos</strong> </br> Sistema de Informações de Pessoal da 1ª Divisão de Levantamento</h5>
                    </div>

                </div>

                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/')}}">Home</a>
                </div>
                <ul class="nav navbar-nav"> 
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Pessoas</a>
                        <ul class="dropdown-menu">
                            <li ><a href="{{url('./#/pessoas')}}">Pessoas</a></li>
                        </ul>


                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" >Condecorações</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('./#/condecoracoes')}}">Lista de Condecorações</a></li>
                                <li><a href="{{url('./#/pessoas-condecoracoes')}}">Pessoas Condecoradas</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" >Cursos/Estágios</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('./#/modalidades')}}">Lista de Modalidades</a></li>
                                <li><a href="{{ url('./#/atividades')}}">Lista de   Cursos/Estágios</a></li>
                                <li><a href="{{ url('./#/pessoas-atividades')}}">Pessoas e Cursos/Estágios</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" >Experiência Profissional</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('./#/experiencias-profissionais')}}">Lista de Experiências Profissionais</a></li>
                                <li><a href="{{url('./#/pessoas-experiencias-profissionais')}}">Pessoas e Experiências Profissionais</a></li>
                            </ul>
                    </li>
                </ul>
                <!-- NAO ESTA SENDO UTILIZADO
                                                <ul class="nav navbar-nav navbar-right">
                                                        @if(auth()->guest())
                                                                @if(!Request::is('auth/login'))
                                                                        <li><a href="{{ url('/#/login') }}">Login</a></li>
                                                                @endif
                                                                @if(!Request::is('auth/register'))
                                                                        <li><a href="{{ url('/auth/register') }}">Sobre</a></li>
                                                                @endif
                                                        @else
                                                                <li class="dropdown">
                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                                                        </ul>
                                                                </li>
                                                        @endif
                                                </ul>
                -->
            </div>

        </div>
    </nav>

    <div>
        @include('flash::message')
        <flash-message duration="10000"></flash-message>
    </div>

    <div ng-view>

    </div>

    <!-- Scripts -->
    @if(Config::get('app.debug'))
    <script src="{{ asset('build/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular.min.js')}}"></script>
    <script src="{{ asset('ngMask.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-route.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-resource.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-animate.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-messages.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-flash.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/ui-bootstrap-tpls.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/navbar.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-cookies.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/query-string.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-oauth2.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/ui-grid.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/leaflet.js')}}"></script>
    <script src="{{ asset('build/js/vendor/ui-leaflet.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-simple-logger.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/Google.js')}}"></script>
    <script src="{{ asset('build/js/vendor/Leaflet.fullscreen.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/string-mask.js')}}"></script>
    <script src="{{ asset('build/js/vendor/angular-input-masks-standalone.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/ng-file-upload.min.js')}}"></script>

    <script src="{{ asset('build/js/vendor/br-validations.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/fuse.min.js')}}"></script>
    <script src="{{ asset('build/js/vendor/leaflet.fusesearch.js')}}"></script>
    <script src="{{ asset('build/js/misc/leaflet.fusesearch.custom.js')}}"></script>
    <script src="{{ asset('build/js/vendor/leaflet.rightclickzoom.js')}}"></script>
    <script src="{{ asset('build/js/vendor/leaflet.label.js')}}"></script>
    <script src="{{ asset('build/js/vendor/leaflet.draw.js')}}"></script>
    <script src="{{ asset('build/js/vendor/leaflet.measurecontrol.js')}}"></script>
    <script src="{{ asset('build/js/vendor/styledLayerControl.js')}}"></script>
    <script src="{{ asset('build/js/vendor/fuse.min.js')}}"></script>
    <script src="{{ asset('build/js/misc/leaflet-infopane/leaflet.infopane.js')}}"></script>
    <script src="{{ asset('build/js/misc/leaflet-logotipo/leaflet.logotipo.js')}}"></script>

    <!-- APP -->
    <script src="{{ asset('build/js/app.js')}}"></script>

    <!-- CONTROLLERS -->
    <script src="{{ asset('build/js/controllers/mapa.js')}}"></script>
    <script src="{{ asset('build/js/controllers/home.js')}}"></script>
    <script src="{{ asset('build/js/controllers/login.js')}}"></script>
    <script src="{{ asset('build/js/controllers/safeCtrl.js')}}"></script>
    <script src="{{ asset('build/js/controllers/formatCtrl.js')}}"></script>

    <script src="{{ asset('build/js/controllers/atividade/atividadeList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/atividade/atividadeNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/atividade/atividadeShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/atividade/atividadeEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/atividade/atividadeRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/modalidade/modalidadeList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/modalidade/modalidadeNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/modalidade/modalidadeShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/modalidade/modalidadeEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/modalidade/modalidadeRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/instituicao/instituicaoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/instituicao/instituicaoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/instituicao/instituicaoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/instituicao/instituicaoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/instituicao/instituicaoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/condecoracao/condecoracaoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/condecoracao/condecoracaoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/condecoracao/condecoracaoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/condecoracao/condecoracaoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/condecoracao/condecoracaoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/formacao/formacaoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/formacao/formacaoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/formacao/formacaoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/formacao/formacaoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/formacao/formacaoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/genero/generoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/genero/generoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/genero/generoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/genero/generoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/genero/generoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/pais/paisList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pais/paisNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pais/paisShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pais/paisEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pais/paisRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/unidade-federacao/unidadeFederacaoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/unidade-federacao/unidadeFederacaoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/unidade-federacao/unidadeFederacaoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/unidade-federacao/unidadeFederacaoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/unidade-federacao/unidadeFederacaoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/municipio/municipioList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/municipio/municipioNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/municipio/municipioShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/municipio/municipioEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/municipio/municipioRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/bairro/bairroList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/bairro/bairroNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/bairro/bairroShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/bairro/bairroEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/bairro/bairroRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/contato/contatoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/contato/contatoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/contato/contatoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/contato/contatoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/contato/contatoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/pessoa/pessoaList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa/pessoaNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa/pessoaShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa/pessoaEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa/pessoaRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/nivel-funcional/nivelFuncionalList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/nivel-funcional/nivelFuncionalNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/nivel-funcional/nivelFuncionalShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/nivel-funcional/nivelFuncionalEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/nivel-funcional/nivelFuncionalRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/organizacao/organizacaoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/organizacao/organizacaoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/organizacao/organizacaoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/organizacao/organizacaoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/organizacao/organizacaoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/pessoa-contato/pessoaContatoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-contato/pessoaContatoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-contato/pessoaContatoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-contato/pessoaContatoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-contato/pessoaContatoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/pessoa-atividade/pessoaAtividadeList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-atividade/pessoaAtividadeNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-atividade/pessoaAtividadeShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-atividade/pessoaAtividadeEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-atividade/pessoaAtividadeRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/pessoa-condecoracao/pessoaCondecoracaoList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-condecoracao/pessoaCondecoracaoNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-condecoracao/pessoaCondecoracaoShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-condecoracao/pessoaCondecoracaoEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-condecoracao/pessoaCondecoracaoRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/experiencia-profissional/experienciaProfissionalList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/experiencia-profissional/experienciaProfissionalNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/experiencia-profissional/experienciaProfissionalShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/experiencia-profissional/experienciaProfissionalEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/experiencia-profissional/experienciaProfissionalRemove.js')}}"></script>

    <script src="{{ asset('build/js/controllers/pessoa-experiencia-profissional/pessoaExperienciaProfissionalList.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-experiencia-profissional/pessoaExperienciaProfissionalNew.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-experiencia-profissional/pessoaExperienciaProfissionalShow.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-experiencia-profissional/pessoaExperienciaProfissionalEdit.js')}}"></script>
    <script src="{{ asset('build/js/controllers/pessoa-experiencia-profissional/pessoaExperienciaProfissionalRemove.js')}}"></script>


    <!-- FILTERS -->
    <script src="{{ asset('build/js/filters/filtro-br.js')}}"></script>

    <!-- SERVICES -->
    <script src="{{ asset('build/js/services/home.js')}}"></script>
    <script src="{{ asset('build/js/services/atividade.js')}}"></script>
    <script src="{{ asset('build/js/services/modalidade.js')}}"></script>
    <script src="{{ asset('build/js/services/instituicao.js')}}"></script>
    <script src="{{ asset('build/js/services/condecoracao.js')}}"></script>
    <script src="{{ asset('build/js/services/formacao.js')}}"></script>
    <script src="{{ asset('build/js/services/genero.js')}}"></script>
    <script src="{{ asset('build/js/services/pais.js')}}"></script>
    <script src="{{ asset('build/js/services/unidadeFederacao.js')}}"></script>
    <script src="{{ asset('build/js/services/municipio.js')}}"></script>
    <script src="{{ asset('build/js/services/bairro.js')}}"></script>
    <script src="{{ asset('build/js/services/contato.js')}}"></script>
    <script src="{{ asset('build/js/services/pessoa.js')}}"></script>
    <script src="{{ asset('build/js/services/nivelFuncional.js')}}"></script>
    <script src="{{ asset('build/js/services/organizacao.js')}}"></script>
    <script src="{{ asset('build/js/services/pessoaContato.js')}}"></script>
    <script src="{{ asset('build/js/services/pessoaAtividade.js')}}"></script>
    <script src="{{ asset('build/js/services/experienciaProfissional.js')}}"></script>
    <script src="{{ asset('build/js/services/pessoaExperienciaProfissional.js')}}"></script>
    <script src="{{ asset('build/js/services/pessoaCondecoracao.js')}}"></script>
    <script src="{{ asset('build/js/services/user.js')}}"></script>
    <script src="{{ asset('build/js/services/util.js')}}"></script>
    <script src="{{ asset('build/js/services/safeCtrl.js')}}"></script>
    <script src="{{ asset('build/js/services/formatCtrl.js')}}"></script>
    @else
    <script src="{{ elixir('js/all.js')}}"></script>
    @endif
    <div class="col-md-12" id="copyright text-right" style="background: #2F4F4F;color: white">
        <div class="footer col-md-2">
            Base de dados de Informações de Pessoal da 1ª Divisão de Levantamento
        </div>
        <div class="col-md-9">
            
        </div>
        <div class="col-md-1">
            <h6>Versão Beta</h6>
        </div>
        
        
    </div>
</body>
</html>

