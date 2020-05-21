<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DataBase;
use App\cartons;
use App\partidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller
{
    // 

    public function numeros()
    {   $user = Auth::user();
        $partidasdatos=partidas::all();
        $carton  = DataBase::table('cartons')-> where('user_id', $user->id)->get();
        $numerossplit = array();
        $count = 0;
        $count1 = 0;
        $partidasdatos=partidas::all();

        foreach($partidasdatos as $ca){
            $numerossplit1 = $ca->numerosQueHanSalido;
            $count1++;
        }

        foreach($carton as $c){
            $numerossplit[$count]['numeros'] = $c->numeros;
            $count++;
        }
        return view('/vistacarton', compact('numerossplit','numerossplit1'));

    }

    public function crearcartones(Request $Request)
    {$user = Auth::user();
        $count =0;
        $countnumeros=0;
        $numeroscarton ="";
        while($countnumeros<25){
            $numeroscarton = rand(10,100).",".$numeroscarton;
            $countnumeros++;
        }
    while($count<$Request->cartones){
       $cartones = new cartons();
       $cartones->partida_id = 1;
       $cartones->user_id = $user->id;
       $cartones->numeros = $numeroscarton;
       $cartones->precio = 20;   
       $cartones->created_at =  time();
       $cartones->updated_at =  time();
       $cartones->save();
       $count++;
    }

       return redirect('/vistacarton')->with('success', 'Practica entregada.');
    }

    
   
}
