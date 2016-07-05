<?php

namespace Sip\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Bairro extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'bairro';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'sigla',
        'municipio_id'
    ];
    
    function pessoa(){
        return $this->hasMany(Pessoa::class);
    }
    function municipio(){
        return $this->belongsTo(Municipio::class);
    }

}
