<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Partida;
use Illuminate\Support\Facades\DB as DataBase;

class updatenumeros extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatenumeros:nombre';

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


        $numeronuevo = rand(1,99);
        $partidas  = DataBase::table('partidas')->where('id','=', 1)->get();

        foreach ($partidas as $ca) {
            $numerossplit1 = $ca->numerosQueHanSalido;
        }

        Partida::where('id','=', 1)->update(['numerosQueHanSalido' => $numerossplit1.",".$numeronuevo]);

    }

    
}
