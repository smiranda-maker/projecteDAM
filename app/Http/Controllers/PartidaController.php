<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB as DataBase;
use App\Carton;
use App\Partida;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PartidaController extends Controller
{
    // 

    //Funcion que genera 3 partidas, 1 en cada ciudad.
    //Todas empiezan a la hora del servidor (cambiar eso)
    public function generarPartidas()
    {

        //Si la segunda falla la primera se creerá igualmente,
        //(implementar POSIBLE rollback para evitar eso)

        //A la hora actual le sumamos una hora y es
        //a la que empezará la partida(es decir cuando se 'cantaran' los numeros)
        $carbon = Carbon::now();
        $carbon = $carbon->addHour(1);
        $carbon = $carbon->format('Y-m-d:H:i');

        $partida1 = new Partida();
        $partida1->ciudad_id = 1;
        $partida1->fechaEmpieza = $carbon;
        //Los demás campos se llenan
        //automaticamente, (nulls y defaults).
        $partida1->save();

        $partida2 = new Partida();
        $partida2->ciudad_id = 2;
        $partida2->fechaEmpieza = $carbon;
        $partida2->save();

        $partida3 = new Partida();
        $partida3->ciudad_id = 3;
        $partida3->fechaEmpieza = $carbon;
        $partida3->save();

        return "Partidas creadas correctamente";
    }
    




    //Funcion que devuelve los numeros de los cartones
    //de la partida en la que te encuentras.
    public function numeros()
    {

        $user = Auth::user();
        $numerossplit = array();
        $count = 0;
        $count1 = 0;

        //Miramos en la tabla carton en que partida ha comprado
        //su ultimo cartón, recibimos ID DE LA PARTIDA en la que está
        $partidaActual = Carton::select('partida_id')
            ->where('user_id', '=', Auth::user()->id)
            //importante ordenar por id de carton y no por partida_id
            ->orderby('id', 'desc')
            ->first();


        //Pido todos los cartones de ese usuario en esa partida y las muestro.
        $carton  = DataBase::table('cartons')->where('user_id', $user->id)
            ->where('partida_id', '=', $partidaActual->partida_id)
            ->get();


        foreach ($carton as $c) {
            $numerossplit[$count]['numeros'] = $c->numeros;
            $count++;
        }


        /********** */
        $partidaActual = Carton::select('partida_id')
            ->where('user_id', '=', Auth::user()->id)
            //importante ordenar por ir de carton y no por partida_id (fallo que dio problemas)
            ->orderby('id', 'desc')
            ->first();



        //En esa partida es donde enviaremos los numeros.
        $countnumeros = 0;
        $partidasdatos = Partida::findOrFail($partidaActual->partida_id);
        foreach (explode(',', $partidasdatos['numerosQueHanSalido']) as $row) {
            $numerosadevolver[$countnumeros]['numero'] = $row;
            $countnumeros++;
        }
        return view('/vistacarton', compact('numerossplit', 'numerosadevolver'));
    }


    //Función que crea cartones
    public function crearcartones(Request $Request)
    {

        $user = Auth::user();
        $count = 0;




        while ($count < $Request->cartones) {
            $numeroscarton = array();
            $countnumeros = 0;
            while ($countnumeros < 25) {
                $num_aleatorio = rand(1, 99);
                if (!in_array($num_aleatorio, $numeroscarton)) {
                    array_push($numeroscarton, $num_aleatorio);
                    $countnumeros++;
                }
            }
            //Ordenas el array de menor a mayor
            sort($numeroscarton);
            //Pasas el array a string separados por comas
            $numeroscarton = implode(",", $numeroscarton);
            $cartones = new Carton();

            //Recibimos la ultima partida que se ha creado en esa ciudad
            $partida = Partida::join('ciudads', 'ciudad_id', '=', 'ciudads.id')
                ->select('partidas.id')
                ->where('ciudad_id', '=', $Request->idciudad)
                ->orderby('partidas.id', 'desc')
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
        return redirect('/vistacarton');
    }

    public function cuentaatras(){

        $fecha = Carbon::now();
        $fecha = $fecha->format('Y-m-d:H:i');
        //Solo te da 1 partida (por el first)
        $partida=Partida::where('fechaEmpieza','>',$fecha)->first();

        return $partida;

    }

    //Funcion que llama a la partida actual y 'canta' numeros
    public function numerosmostrados()
    {

        $partidaActual = Carton::select('partida_id')
            ->where('user_id', '=', Auth::user()->id)
            //importante ordenar por id de carton y no por partida_id (fallo que dio problemas)
            ->orderby('id', 'desc')
            ->first();

        //En esa partida es donde enviaremos los numeros.
        $partidasdatos = Partida::findOrFail($partidaActual->partida_id);

        return response()->json(['data' => $partidasdatos->numerosQueHanSalido]);
    }


    public function ultimonumero()
    {

        $partidaActual = Carton::select('partida_id')
            ->where('user_id', '=', Auth::user()->id)
            //importante ordenar por ir de carton y no por partida_id (fallo que dio problemas)
            ->orderby('id', 'desc')
            ->first();

        //En esa partida es donde enviaremos los numeros.
        $partidasdatos = Partida::findOrFail($partidaActual->partida_id);
        foreach (explode(',', $partidasdatos['numerosQueHanSalido']) as $row) {
            $ultimonumero = $row;
        }



        return response()->json(['data' => $ultimonumero]);
    }

    public function numerosparamostrar()
    {

        $partidaActual = Carton::select('partida_id')
            ->where('user_id', '=', Auth::user()->id)
            //importante ordenar por ir de carton y no por partida_id (fallo que dio problemas)
            ->orderby('id', 'desc')
            ->first();


        //En esa partida es donde enviaremos los numeros.
        $count = 0;
        $partidasdatos = Partida::findOrFail($partidaActual->partida_id);
        foreach (explode(',', $partidaActual['numerosQueHanSalido']) as $row) {
            $partidasdatos[$count]['numero'] = $row;
            $count++;
        }
        return view('/vistacarton', compact('partidasdatos'));
    }

    public function ganador()
    {
        $partidas  = DataBase::table('partidas')->where('id', '=', Auth::user()->id)->get();

        foreach ($partidas as $row) {
            if ($row->idcarton_bingo != null) {
                $usuario = User::findOrFail($row->idcarton_bingo);
                return response()->json(['data' => $usuario['nickname']]);
            }
        }
    }

    public function linea()
    {
        $partidas  = DataBase::table('partidas')->where('id', '=', 1)->get();
        foreach ($partidas as $row) {
            if ($row->idcarton_linea != null) {
                $usuario = User::findOrFail($row->idcarton_linea);
                return response()->json(['data' => $usuario['nickname']]);
            }
        }
    }

    public function diagonal()
    {
        $partidas  = DataBase::table('partidas')->where('id', '=', Auth::user()->id)->get();

        foreach ($partidas as $row) {
            if ($row->idcarton_diagonal != null) {
                $usuario = User::findOrFail($row->idcarton_diagonal);
                return response()->json(['data' => $usuario['nickname']]);
            }
        }
    }
}
