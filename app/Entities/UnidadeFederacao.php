<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class UnidadeFederacao extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'unidade_federacao';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'sigla',
        'pais_id'
    ];
    function pais(){
        return $this->belongsTo(Pais::class);
    }
    function municipio(){
        return $this->hasMany(Municipio::class);
    }

}
