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
        $partidas  = DataBase::table('partidas')->where('idcarton_bingo', '=', )->get();


        foreach ($partidas as $c) {
            // echo nl2br("**************************" . $c->id . "**********************************");
            $partidasdatos = Partida::findOrFail($c->id);
            $numerosQueHanSalidospit = array();
            $count = 0;

            foreach (explode(',', $partidasdatos['numerosQueHanSalido']) as $row) {
                $numerosQueHanSalidospit[$count]['numerosquehansalido'] = $row;
                $count++;
            }
            $carton = Carton::where('partida_id', $c->id)->get();
            /*REVISION LINEA HORINZONTAL O VERTICAL*/

            foreach ($carton as $c) {
                //echo $c['id'];
                $numerosarray = array();
                $count = 0;
                foreach (explode(',', $c['numeros']) as $row) {
                    $numerosarray[$count]['numero'] = $row;
                    $count++;
                }
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
                    echo $numeroslineahorizontal;
                    
                }
                $partidasdatos->idcarton_linea= $partidasdatos->idcarton_linea.$c->id.",";
                $partidasdatos->save();

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
                    // echo "nueva fila";
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
                //echo "numero iguales" . $numerosiguales . "dell carton" . $c->id;
                if ($numerosiguales == 25) {
                    $partida=Partida::where('id', '=', $c->partida_id)->get();
                    $partida->idcarton_bingo=$partida->idcarton_bingo.$c->id;
                    $partida->save();
                }
            }
        }
    }
}