<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carton extends Model
{
    //
    protected $fillable = [
        'id', 'partida_id', 'user_id','numeros','precio','create_at','update_at'
    ];
}
