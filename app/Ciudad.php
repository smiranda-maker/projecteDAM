<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //

    //Una ciudad puede estar en muchas partida, relacion 1-N
    public function partidas(){
        return $this->hasMany(Partida::class);
    }
}

