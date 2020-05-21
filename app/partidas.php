<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partidas extends Model
{
    protected $fillable = [
        'id', 'ciudad_id', 'fechaEmpieza', 'numerosQueHanSalido', 'linea', 'bingo', 'diagonal', 'created_at', 'updated_at'
    ];//
}
