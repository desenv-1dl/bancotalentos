<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pais extends Model implements Transformable
{
    use TransformableTrait;
    protected $table = 'pais';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'sigla'
    ];
    function unidadeFederacao(){
        return $this->hasMany(UnidadeFederacao::class);
    }

}
