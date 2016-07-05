<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pessoa extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'pessoa';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'nome_guerra',
        'cpf',
        'nivel_funcional_id',
        'organizacao_id',
        'genero_id',
        'formacao_id',
        'data_nascimento',
        'endereco',
        'numero',
        'complemento',
        'cep',
        'bairro_id',
        'municipio_id',
        'observacao',
        'ativo'
    ];
    
    
    function nivelFuncional (){
        return $this->belongsTo(NivelFuncional::class);
    }
    function organizacao (){
        return $this->belongsTo(Organizacao::class);
    }
    function genero (){
        return $this->belongsTo(Genero::class);
    }
    function formacao (){
        return $this->belongsTo(Formacao::class);
    }
    
    function bairro(){
        return $this->belongsTo(Bairro::class);
    }
    
    function municipio(){
        return $this->belongsTo(Municipio::class);
    }
    
    function pessoaContato(){
        //return $this->belongsToMany(Contato::class,'public.pessoa_contato','pessoa_id','contato_id');
        return $this->hasMany(PessoaContato::class);
    }
    
    function pessoaCondecoracao(){
        return $this->hasMany(Condecoracao::class);
    }
    
    function pessoaAtividade(){
        return $this->hasMany(PessoaAtividade::class);
    }
    
}
