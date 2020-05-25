<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    protected $fillable = [
        'producto_id ', 'user_id ', 'fecha','created_at	','updated_at'
    ];
}
