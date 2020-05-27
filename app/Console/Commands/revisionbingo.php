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
        $partidas  = DataBase::table('partidas')->where('idcarton_bingo', '=', null)->get();
       // echo $partidas;

        foreach ($partidas as $partida) {
             echo $partida->idcarton_linea;
            $jugadorpremiadolinea = 0;
            $jugadorpremiadobingo = 0;
            // echo nl2br("**************************" . $c->id . "**********************************");
            $partidasdatos = Partida::findOrFail($partida->id);
            $numerosQueHanSalidospit = array();
            $count = 0;
            foreach (explode(',', $partidasdatos['numerosQueHanSalido']) as $row) {
                $numerosQueHanSalidospit[$count]['numerosquehansalido'] = $row;
                $count++;
            }
            $carton = Carton::where('partida_id', $partida->id)->get();
            /*REVISION LINEA HORINZONTAL O VERTICAL*/

            foreach ($carton as $c) {

                $numerosarray = array();
                $count = 0;
                foreach (explode(',', $c['numeros']) as $row) {
                    $numerosarray[$count]['numero'] = $row;
                    $count++;
                }
                    if($partida->idcarton_linea==null){
                    /*horizontal*/
                    $countwhile = 0;
                    $countfila = 0;

                    while ($countwhile != 5) {
                        $numeroslineahorizontal = 0;
                        $countnumeros = 0;
                        while ($countnumeros != 5) {
                            foreach ($numerosQueHanSalidospit as $nm) {
                                if ($numerosarray[$countnumeros + $countfila]['numero'] == $nm['numerosquehansalido']) {
                                    $numeroslineahorizontal++;
                                }
                            }
                            $countnumeros++;
                        }

                        $countfila = $countfila + 5;
                        $countwhile++;
                        if ($numeroslineahorizontal == 5) {
                            if ($jugadorpremiadolinea == 0) {
                                $jugadorpremiadolinea = $c->user_id;
                                $partida = Partida::where('id', '=', $c->partida_id)->get();
                                $partida[0]['idcarton_linea'] = $partida[0]['idcarton_linea'] . $c->user_id;
                                Partida::where('id', '=', $c->partida_id)->update(['idcarton_linea' => $partida[0]['idcarton_linea']]);
                            }
                        }
                    }


                    /*Vertical */
                    $countwhile = 0;
                    $countfila = 0;
                    while ($countwhile != 5) {
                        $numeroslineavertical = 0;

                        $countnumeros = 0;
                        $sumavertical = 0;
                        while ($countnumeros != 5) {
                            foreach ($numerosQueHanSalidospit as $nm) {
                                if ($numerosarray[$countfila + $sumavertical]['numero'] == $nm['numerosquehansalido']) {
                                    $numeroslineavertical++;
                                    //echo $numeroslinea;
                                }
                            }

                            $sumavertical = $sumavertical + 5;
                            $countnumeros++;
                        }

                        $countfila++;
                        $countwhile++;
                        //echo $numeroslineavertical;
                        if ($numeroslineavertical == 5) {
                            if ($jugadorpremiadolinea == 0) {
                                $jugadorpremiadolinea = $c->user_id;
                                $partida = Partida::where('id', '=', $c->partida_id)->get();
                                $partida[0]['idcarton_linea'] = $partida[0]['idcarton_linea'] . $c->user_id;
                                Partida::where('id', '=', $c->partida_id)->update(['idcarton_linea' => $partida[0]['idcarton_linea']]);
                            }
                        }
                        // echo "nueva fila";
                    
                }
            }
        }
            /*REVISION BINGO */
            foreach ($carton as $c) {
                $numerosiguales = 0;

                foreach ($numerosQueHanSalidospit as $nm) {
                    foreach (explode(',', $c['numeros']) as $row) {
                        if ($row == $nm['numerosquehansalido'] && $row != "") {
                            $numerosiguales++;
                        }
                    }
                }
               // echo "numeros iguales" . $numerosiguales;
                if ($numerosiguales == 25) {
                    if ($jugadorpremiadobingo == 0) {
                        $jugadorpremiadobingo = $c->user_id;
                        $partida = Partida::where('id', '=', $c->partida_id)->get();
                        $partida[0]['idcarton_bingo'] = $partida[0]['idcarton_bingo'] . $c->user_id;
                        Partida::where('id', '=', $c->partida_id)->update(['idcarton_bingo' => $partida[0]['idcarton_bingo']]);
                    }
                }
            }
        }
    }
}
