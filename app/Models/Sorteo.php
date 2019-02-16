<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
    protected $fillable = [
        'sorteo', 'premio_id', 'fecha'
    ];

    public function premio(){
        return $this->hasOne("/App/Premio");
    }
}
