<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DataBase;
use App\cartons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller
{
    // 

    public function numeros()
    {$user = Auth::user();
        $carton  = DataBase::table('cartons')-> where('user_id', $user->id)->get();
        $numerossplit1 = array();
        $numerossplit = array();
        $count = 0;
        foreach($carton as $c){
            $numerossplit[$count]['numeros'] = $c->numeros;
            $count++;
        }
        return view('/vistacarton', compact('numerossplit'));

    }

    public function crearcartones(Request $Request)
    {$user = Auth::user();
        $count =0;
    while($count<$Request->cartones){
       $cartones = new cartons();
       $cartones->partida_id = 2;
       $cartones->user_id = $user->id;
       $cartones->numeros = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,16,18,19,20";
       $cartones->created_at =  time();
       $cartones->updated_at =  time();
       $cartones->save();
       $count++;
    }

       return redirect('/vistacarton')->with('success', 'Practica entregada.');
    }

    
}
