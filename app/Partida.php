<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    //
    protected $fillable = [
        'id', 'ciudad_id', 'fechaEmpieza', 'numerosQueHanSalido', 'linea', 'bingo', 'diagonal', 'created_at', 'updated_at'
    ];
}
