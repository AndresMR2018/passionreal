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

    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        // $anuncios=Anuncio::where('estado','=','activado');
        // $anuncios = Anuncio::orderBy('updated_at','desc')->paginate(5);
        $anuncios = Anuncio::where('estado','=','activado')->orderBy('updated_at','desc')->paginate(1);
        // $anuncios = $anuncios->orderBy('updated_at','desc')->paginate(1);
        
 
                view()->share([
                'categorias'=>$categorias,
                'paquetes'=>$paquetes,
                'anuncios'=>$anuncios
                ]);
    }
}
