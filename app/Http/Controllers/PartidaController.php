<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DataBase;
use App\Carton;
use App\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller
{
    // 

    //Funcion que genera 3 partidas, 1 en cada ciudad.
    public function generarPartidas(){

        //Si la segunda falla la primera se creerá igualmente,
        //(implementar POSIBLE rollback para evitar eso)

        $partida1= new Partida();
        $partida1->ciudad_id=1;
        $partida1->fechaEmpieza=date('Y-m-d H:i:s');
        //Los demás campos se llenan
        //automaticamente, (nulls y defaults).
        $partida1->save();

        $partida2= new Partida();
        $partida2->ciudad_id=2;
        $partida2->fechaEmpieza=date('Y-m-d H:i:s');
        $partida2->save();

        $partida3= new Partida();
        $partida3->ciudad_id=3;
        $partida3->fechaEmpieza=date('Y-m-d H:i:s');
        $partida3->save();

        return "partidas creadas correctamente";
       
    }





    public function numeros()
    {   $user = Auth::user();
        $partidasdatos=Partida::all();
        $carton  = DataBase::table('cartons')-> where('user_id', $user->id)->get();
        $numerossplit = array();
        $count = 0;
        $count1 = 0;
        $partidasdatos=Partida::all();

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

    public function crearcartones(Request $Request){


        $user = Auth::user();
        $count =0;
        $countnumeros=0;
        $numeroscarton ="";
        while($countnumeros<25){
            $numeroscarton = rand(10,100).",".$numeroscarton;
            $countnumeros++;
        }
        while($count<$Request->cartones){
        $cartones = new Carton();

        //Recibimos la ulitma partida que se ha creado en esa ciudad
        $partida=Partida::join('ciudads','ciudad_id','=','ciudads.id')
        ->select('partidas.id')
        ->where('ciudad_id','=',1)
        ->orderby('partidas.id','desc')
        ->first();


        $cartones->partida_id = $partida->id;
        $cartones->user_id = $user->id;
        $cartones->numeros = $numeroscarton;

        //Dependiendo en que ciudad esté el precio del cartón cambiará
        switch ($Request->idciudad) {
            //Madrid
            case 1:
                $cartones->precio = 20;   
                break;
            //Dubai
            case 2:
                $cartones->precio = 40;   
                break;
            //Las Vegas
            case 3:
                $cartones->precio = 60;   
                break;
        }
        
        $cartones->save();
        $count++;
        }

       return redirect('/vistacarton')->with('success', 'Practica entregada.');
    }

    
   
}
