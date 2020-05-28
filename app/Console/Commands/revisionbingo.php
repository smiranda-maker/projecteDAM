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

        foreach ($partidas as $partida) {
            $partidas  = DataBase::table('partidas')->where('id', '=', $partida->id)->first();
            $arrayCampoNumeros = explode(",", $partidas->numerosQueHanSalido);
            $numeronuevo = rand(1, 99);
            if (!in_array($numeronuevo, $arrayCampoNumeros)) {
                array_push($arrayCampoNumeros, $numeronuevo);
            }

            Partida::where('id', '=', $partida->id)->update(['numerosQueHanSalido' => implode(",", $arrayCampoNumeros)]);
            $jugadorpremiadobingo = 0;
            $partidasdatos = Partida::findOrFail($partida->id);
            $numerosQueHanSalidospit = array();
            $count = 0;
            foreach (explode(',', $partidasdatos['numerosQueHanSalido']) as $row) {
                $numerosQueHanSalidospit[$count]['numerosquehansalido'] = $row;
                $count++;
            }
            echo $partidasdatos['idcarton_linea'];
            $carton = Carton::where('partida_id', $partida->id)->get();
            /*REVISION LINEA HORINZONTAL O VERTICAL*/
            $iddeljugador = 0;
            $lineatocado = 0;
            $Bingotocado = 0;
            $diagonaltocado = 0;
            foreach ($carton as $c) {
                $iddeljugador = $c->user_id;
                if ($lineatocado != $iddeljugador) {
                    $lineatocado = 0;
                }
                if ($diagonaltocado != $iddeljugador) {
                    $diagonaltocado = 0;
                }
                $numerosarray = array();
                $count = 0;
                foreach (explode(',', $c['numeros']) as $row) {
                    $numerosarray[$count]['numero'] = $row;
                    $count++;
                }
                if ($partidasdatos['idcarton_linea'] == null) {
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
                            if ($lineatocado == 0) {
                                $lineatocado = $c->user_id;
                                $partida = Partida::where('id', '=', $c->partida_id)->get();
                                $partida[0]['idcarton_linea'] = $partida[0]['idcarton_linea'] . "," . $c->user_id;
                                Partida::where('id', '=', $c->partida_id)->update(['idcarton_linea' => $partida[0]['idcarton_linea']]);
                            }
                        }
                        $numeroslineahorizontal = 0;
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
                                }
                            }

                            $sumavertical = $sumavertical + 5;
                            $countnumeros++;
                        }

                        $countfila++;
                        $countwhile++;
                        if ($numeroslineavertical == 5) {
                            if ($lineatocado == 0) {
                                $lineatocado = $c->user_id;
                                $partida = Partida::where('id', '=', $c->partida_id)->get();
                                $partida[0]['idcarton_linea'] = $partida[0]['idcarton_linea'] . "," . $c->user_id;
                                Partida::where('id', '=', $c->partida_id)->update(['idcarton_linea' => $partida[0]['idcarton_linea']]);
                            }
                        }
                    }
                }

                /**bingo Diagonal izquierda a derecha */
                if ($partidasdatos['idcarton_diagonal'] == null) {

                    $countwhile = 0;
                    $countfila = 0;
                    $numeroslineadiagonalizde = 0;

                    while ($countwhile != 5) {
                        foreach ($numerosQueHanSalidospit as $nm) {
                            if ($numerosarray[$countfila]['numero'] == $nm['numerosquehansalido']) {
                                $numeroslineadiagonalizde++;
                            }
                        }




                        $countfila = $countfila + 6;
                        $countwhile++;
                        if ($numeroslineadiagonalizde == 5) {
                            if ($diagonaltocado == 0) {
                                $diagonaltocado = $c->user_id;
                                $partida = Partida::where('id', '=', $c->partida_id)->get();
                                $partida[0]['idcarton_diagonal'] = $partida[0]['idcarton_diagonal'] . "," . $c->user_id;
                                Partida::where('id', '=', $c->partida_id)->update(['idcarton_diagonal' => $partida[0]['idcarton_diagonal']]);
                            }
                        }
                    }
                    /*Diagonal derecha a izquierda */
                    $countwhile = 0;
                    $countfila = 4;
                    $numeroslineadiagonaldeiz = 0;

                    while ($countwhile != 5) {
                        foreach ($numerosQueHanSalidospit as $nm) {
                            if ($numerosarray[$countfila]['numero'] == $nm['numerosquehansalido']) {
                                $numeroslineadiagonaldeiz++;
                            }
                        }




                        $countfila = $countfila + 4;
                        $countwhile++;
                        if ($numeroslineadiagonaldeiz == 5) {
                            if ($diagonaltocado == 0) {
                                $diagonaltocado = $c->user_id;
                                $partida = Partida::where('id', '=', $c->partida_id)->get();
                                $partida[0]['idcarton_diagonal'] = $partida[0]['idcarton_diagonal'] . "," . $c->user_id;
                                Partida::where('id', '=', $c->partida_id)->update(['idcarton_diagonal' => $partida[0]['idcarton_diagonal']]);
                            }
                        }
                    }
                }
            }


            /*REVISION BINGO */
            foreach ($carton as $c) {
                $numerosiguales = 0;
                $iddeljugador = $c->user_id;
                foreach ($numerosQueHanSalidospit as $nm) {
                    foreach (explode(',', $c['numeros']) as $row) {
                        if ($row == $nm['numerosquehansalido'] && $row != "") {
                            $numerosiguales++;
                        }
                    }
                }
                echo $numerosiguales;

                if ($Bingotocado != $iddeljugador) {
                    $Bingotocado = 0;
                }
                if ($numerosiguales == 25) {
                    if ($Bingotocado == 0) {
                        $Bingotocado = $c->user_id;
                        $partida = Partida::where('id', '=', $c->partida_id)->get();
                        $partida[0]['idcarton_bingo'] = $partida[0]['idcarton_bingo'] . "," . $c->user_id;
                        Partida::where('id', '=', $c->partida_id)->update(['idcarton_bingo' => $partida[0]['idcarton_bingo']]);
                    }
                }
            }
        }
    }
}
