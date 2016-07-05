<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return view('app');
});

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

//Route::group(['middleware' => 'oauth'], function (){

    #DOMINIOS

    # Profissao #
    Route::resource('atividade', 'AtividadeController', ['except' => ['create', 'edit']]);
    Route::resource('modalidade', 'ModalidadeController', ['except' => ['create', 'edit']]);
    Route::resource('instituicao', 'InstituicaoController', ['except' => ['create', 'edit']]);
    Route::resource('condecoracao', 'CondecoracaoController', ['except' => ['create', 'edit']]);
    Route::resource('genero', 'GeneroController', ['except' => ['create', 'edit']]);
    Route::resource('formacao', 'FormacaoController', ['except' => ['create', 'edit']]);
    Route::resource('pais', 'PaisController', ['except' => ['create', 'edit']]);
    Route::resource('unidade-federacao', 'UnidadeFederacaoController', ['except' => ['create', 'edit']]);
    Route::resource('home', 'HomeController', ['except' => ['create', 'edit']]);
    Route::resource('municipio', 'MunicipioController', ['except' => ['create', 'edit']]);
    Route::resource('bairro', 'BairroController', ['except' => ['create', 'edit']]);
    Route::resource('contato', 'ContatoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoa', 'PessoaController', ['except' => ['create', 'edit']]);
    Route::resource('nivel-funcional', 'NivelFuncionalController', ['except' => ['create', 'edit']]);
    Route::resource('organizacao', 'OrganizacaoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoa-contato', 'PessoaContatoController', ['except' => ['create', 'edit']]);
    Route::resource('pessoa-atividade', 'PessoaAtividadeController', ['except' => ['create', 'edit']]);
    Route::resource('pessoa-condecoracao', 'PessoaCondecoracaoController', ['except' => ['create', 'edit']]);
    Route::resource('experiencia-profissional', 'ExperienciaProfissionalController', ['except' => ['create', 'edit']]);
    Route::resource('pessoa-experiencia-profissional', 'PessoaExperienciaProfissionalController', ['except' => ['create', 'edit']]);
    

//});
    
    



