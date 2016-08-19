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
        <!--<link href="{{ asset('build/css/startbootstrap-sb-admin/css/bootstrap.min.css')}}" rel="stylesheet" />-->
        <link href="{{ asset('build/css/startbootstrap-sb-admin/css/plugins/morris.css')}}" rel="stylesheet" />
        
        <link href="{{ asset('build/css/startbootstrap-sb-admin/css/sb-admin.css')}}" rel="stylesheet" />
        
        <link href="{{ asset('build/css/startbootstrap-sb-admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
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
        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-1">
                <img src="{{asset('build/images/logo_1dl.png')}}" class="img-rounded" style="width: 80px;height: 80px"/>
            </div>
            <div class="col-md-7" style="margin-left: -15px;margin-top: 15px">
                <a class="navbar-brand text-left" ng-href="/#/home"><strong> Banco de Talentos</strong> Sistema de Informações de Pessoal da 1ª Divisão de Levantamento</a>
            </div>
            <div class="navbar-header col-md-1">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Top Menu Items -->
            <div class="col-md-3">
            <ul class="nav navbar-right top-nav">
<!--                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" style="color: white"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a style="color: white" href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="">View All</a>
                        </li>
                    </ul>
                </li>-->
                <li class="dropdown">
                    <a style="color: white" href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=""><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: 2F4F4F !important">
                <ul class="nav navbar-nav side-nav">
                    <li>                     
                        <a ng-href="/#/home" style="color: white"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a ng-href="./#/pessoas" style="color: white"><i class="fa fa-fw fa-users"></i> Pessoas</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1" style="color: white"><i class="fa fa-fw fa-trophy"></i> Condecorações <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a ng-href="./#/condecoracoes">Lista de Condecorações</a>
                            </li>
                            <li>
                                <a ng-href="./#/pessoas-condecoracoes"></i>Pessoas Condecoradas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2" style="color: white"><i class="fa fa-fw fa-mortar-board"></i> Cursos/Estágios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a ng-href="./#/modalidades">Lista de Modalidades</a>
                            </li>
                            <li>
                                <a ng-href="./#/atividades">Lista de Cursos/Estágios</a>
                            </li>
                            <li>
                                <a ng-href="./#/pessoas-atividades">Pessoas e Cursos/Estágios</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3" style="color: white"><i class="fa fa-fw fa-suitcase"></i> Experiência Profissional <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a ng-href="./#/experiencias-profissionais">Lista de Experiências Profissionais</a>
                            </li>
                            <li>
                                <a ng-href="./#/pessoas-experiencias-profissionais">Pessoas e Experiências Profissionais</a>
                            </li>
                        </ul>
                    </li>
                    
<!--                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!--<div id="page-wrapper" style="background: red">-->

<!--            <div class="container-fluid" >-->
                <div ng-view style="height: 100%;margin-top: 100px;margin-bottom: 30px">
   

                </div>

<!--                 Page Heading 
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                 /.row -->

<!--                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                 /.row -->

<!--                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 /.row -->

<!--                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                 /.row 

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
<!--                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
<!--                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
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

    <script src="{{ asset('js/startbootstrap-sb-admin/js/plugins/morris/morris-data.js')}}"></script>
    <script src="{{ asset('js/startbootstrap-sb-admin/js/plugins/morris/morris.js')}}"></script>
    <script src="{{ asset('js/startbootstrap-sb-admin/js/plugins/morris/raphael.min.js')}}"></script>
    @else
    <script src="{{ elixir('js/all.js')}}"></script>
    @endif
    <div class="col-md-12" id="copyright text-right" style="background: #2F4F4F;color: white;position:fixed;
    bottom:0px;
    left:0px;
    right:0px;
    height:50px;
    margin-bottom:0px;">
        <div class="footer col-md-2">
            
        </div>
        <div class="col-md-9">

            <p class="text-center" style="margin-top: 15px">Base de dados de Informações de Pessoal da 1ª Divisão de Levantamento</p>

        </div>
        <div class="col-md-1">
            <h6>Versão Beta</h6>
        </div>
        
        
    </div>
</body>
</html>

