<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $fillable = [
        'competencia', 'local', 'visitante', 'tipo', 'email', 'password',
    ];

    public function local(){
        return $this->belongsTo('App/Competidor');
    }

    public function visitante(){
        return $this->belongsTo('App/Competidor');
    }

    public function usuarios(){
        return $this->belongsToMany("/App/User", "competencias_usuarios", "competencia_id");
    }
}
