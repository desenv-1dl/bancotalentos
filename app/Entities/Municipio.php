<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Municipio extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'municipio';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'sigla',
        'unidade_federacao_id'
    ];
    
    function unidadeFederacao(){
        return $this->belongsTo(UnidadeFederacao::class);
    }
    function bairro(){
        return $this->hasMany(Bairro::class);
    }

}
