<?php

namespace App\Console\Commands;

use App\Models\Anuncio;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ReactivacionAnuncios extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:uploadAnuncio';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para la reactivacion de los anuncios';

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
     * @return int
     */
    public function handle()
    {
       $Hora = Carbon::now();
        if(!($Hora->toTimeString()>'23:59:59' && $Hora->toTimeString()<'09:00:00')){
        $anuncios=Anuncio::orderBy('updated_at','desc');
        foreach($anuncios as $anuncio){
            $now = Carbon::now()->format('Y-m-d H:i:s.0');
            $user = User::findOrFail($anuncio->user_id)->first();
            $timepaquete = $anuncio->paquete->periodo_horas;
            if(
            $now >= $anuncio->updated_at->addHours($timepaquete)->format('Y-m-d H:i:s.0') 
            && $user->perfil->creditos - 1 !=-1
            && $anuncio->estado!='desactivado'
              ){
                sleep(1);
                $anuncio->update([
                    "updated_at" => $anuncio->touch()
                ]);
                $user = User::findOrFail($anuncio->user_id)->first();
                $creditosPerfil = $user->perfil->creditos;

                $anuncio->user->perfil->update([
                    "creditos"=>$creditosPerfil-1,
                ]);
            }
        }
    }//fin if horas
    }
}
