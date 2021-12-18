<?php

namespace App\Providers;

use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Paquete;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
Use Illuminate\Pagination\Paginator;
use App\Console\Commands\ReactivacionAnuncios;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        $anuncios=Anuncio::orderBy('updated_at','desc')->paginate(5);

        // foreach($anuncios as $anuncio){
        //     $now = Carbon::now()->format('Y-m-d H:i:s.0');
        //     if($now >= $anuncio->updated_at->addMinutes(2)->format('Y-m-d H:i:s.0')){
        //         sleep(1);
        //         $anuncio->update([
        //             "updated_at" => $anuncio->touch()
        //         ]);
        //         $user = User::findOrFail($anuncio->user_id)->first();
        //         $creditosPerfil = $user->perfil->creditos;

        //         $anuncio->user->perfil->update([
        //             "creditos"=>$creditosPerfil-1,
        //         ]);
        //     }
        // }
      
    

                view()->share([
                'categorias'=>$categorias,
                'paquetes'=>$paquetes,
                'anuncios'=>$anuncios
             
                ]);
    }
}
