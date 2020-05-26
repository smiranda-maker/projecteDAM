<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Carton;
use App\Partida;
use Illuminate\Support\Facades\DB as DataBase;
use Illuminate\Support\Facades\Auth;

class revisionbingo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'revisionbingo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $partidaActual = Carton::select('partida_id')
            ->where('user_id', '=', 1)
            //importante ordenar por ir de carton y no por partida_id (fallo que dio problemas)
            ->orderby('id', 'desc')
            ->first();
        $partidasdatos = Partida::findOrFail(1);
        $count = 0;
        foreach (explode(',', $partidasdatos['numerosQueHanSalido']) as $row) {
            $numerosQueHanSalidospit[$count]['numerosquehansalido'] = $row;
            $count++;
        }

        $carton = Carton::findOrFail(65);
        $count = 0;
        foreach (explode(',', $carton->numeros) as $row) {
            $numerocartonsplit[$count]['numeros'] = $row;
            $count++;
        }

        /* foreach ($numerosQueHanSalidospit as $ca) {
            echo $ca['numerosquehansalido'];
        }

        foreach ($numerocartonsplit as $ca1) {
            echo $ca1['numeros'];
        }*/
        $numerosiguales = 0;
        $idganador=" ";
        foreach ($numerosQueHanSalidospit as $ca) {
            foreach ($numerocartonsplit as $ca1) {
                if ($ca['numerosquehansalido'] == $ca1['numeros'] && $ca['numerosquehansalido']!="") {
                    $numerosiguales++;
                    if($numerosiguales==25){
                        $idganador=$ca1['user_id'];
                    }
                }
            }
        }
       
        echo $numerosiguales." ".$idganador;

    }
}
