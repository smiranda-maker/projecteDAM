<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DataBase;

use Illuminate\Http\Request;

class PartidaController extends Controller
{
    // 

    public function numeros()
    {
        $carton  = DataBase::table('cartons')->get();
        $numerossplit1 = array();
        $numerossplit = array();
        $count = 0;
        foreach($carton as $c){
            $numerossplit[$count]['numeros'] = $c->numeros;
            $count++;
        }
        return view('/prueba', compact('numerossplit'));

    }

    
}
