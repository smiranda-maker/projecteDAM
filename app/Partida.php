<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    //
    protected $fillable = [
        'id', 'ciudad_id', 'fechaEmpieza', 'numerosQueHanSalido', 'idcarton_linea', 'idcarton_bingo', 'idcarton_diagonal', 'created_at', 'updated_at'
    ];



}
