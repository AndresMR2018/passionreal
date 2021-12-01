<?php

namespace App\Providers;

use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Paquete;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
Use Illuminate\Pagination\Paginator;

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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // //
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
                $categorias = Categoria::all();
                $paquetes = Paquete::all();
                $anuncios = Anuncio::Paginate(3);
                view()->share([
                'categorias'=>$categorias,
                'paquetes'=>$paquetes,
                'anuncios'=>$anuncios
                ]);
    }
}
