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
use App\Models\Orden;
use App\Models\Reporte;
use App\Models\Solicitud;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

    public static function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
      

        
        // $anuncios=Anuncio::where('estado','=','activado');
        // $anuncios = Anuncio::orderBy('updated_at','desc')->paginate(5);
        $anuncios = Anuncio::where('estado','=','activado')->orderBy('updated_at','asc')->paginate(2);
        // $anuncios = $anuncios->orderBy('updated_at','desc')->paginate(1);
        
 

        // foreach($anuncios as $anuncio){
        //     $now = Carbon::now()->format('Y-m-d H:i:s');
           
        //     $user = User::find($anuncio->user_id);
           
        //     if(
        //    date('Y-m-d') == "2022-01-05")
        //     {
        //        dd("cumple");
        //     }

        // }

                view()->share([
                'categorias'=>$categorias,
                'paquetes'=>$paquetes,
                'anuncios'=>$anuncios
                ]);
    }
}
