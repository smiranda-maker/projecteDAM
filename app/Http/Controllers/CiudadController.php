<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use Pixeloution\Random\Randomizer;



class CiudadController extends Controller
{
    //


    //Devuelve todas las ciudades
    public function ciudades(){
    
        $ciudades=Ciudad::all();
        return $ciudades;
        
    }

    //Pruebas para comprobar el funcionamiento del random
    public function randomcont(){

        $generator = new Randomizer('smiranda@ies-sabadell.cat');

        $generator->integer(0,100,5);
        return $generator;
    }

}
