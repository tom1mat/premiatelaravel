<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competidor extends Model
{
    protected $table = "competidores";
    protected $fillable = [
        'competidor'
    ];
}
