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
        $partidas  = DataBase::table('partidas')->where('idcarton_bingo', '=', 0)->get();

        //importante ordenar por ir de carton y no por partida_id (fallo que dio problemas)

        foreach ($partidas as $c) {
            echo nl2br("**************************" . $c->id . "**********************************");
            $partidasdatos = Partida::findOrFail($c->id);
            $numerosQueHanSalidospit = array();
            $count = 0;
            foreach (explode(',', $partidasdatos['numerosQueHanSalido']) as $row) {
                $numerosQueHanSalidospit[$count]['numerosquehansalido'] = $row;
                $count++;
            }
            $carton = Carton::where('partida_id', $c->id)->get();

            foreach ($carton as $c) {
                $numerosiguales = 0;

                foreach ($numerosQueHanSalidospit as $nm) {
                    foreach (explode(',', $c['numeros']) as $row) {
                        if ($row == $nm['numerosquehansalido'] && $row!="") {
                            $numerosiguales++;
                        }
                    }
                }
                echo "numero iguales".$numerosiguales."dell carton".$c->id;
                if($numerosiguales==25){
                    Partida::where('id','=', $c->id)->update(['idcarton_bingo' => $c->user_id]);
                }

            }
        }
    }
}
