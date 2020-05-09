<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class CiudadController extends Controller
{
    //

    public function ciudades(){
    
        $ciudades=Ciudad::all();
        
        return $ciudades;
        
    }

}
