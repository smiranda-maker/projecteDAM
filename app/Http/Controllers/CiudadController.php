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

header("Content-type: application/json");
header("Access-Control-Allow-Origin:*");
ob_end_flush();
