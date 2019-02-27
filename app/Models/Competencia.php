<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $fillable = [
        'competencia', 'local', 'visitante', 'tipo', 'email', 'password',
    ];

    public function flocal(){
        return $this->hasOne(Competidor::class,"id", "local");
    }

    public function fvisitante(){
        return $this->hasOne(Competidor::class,"id", "visitante");
    }

    public function usuarios(){
        return $this->belongsToMany("/App/User", "competencias_usuarios", "competencia_id");
    }
}
