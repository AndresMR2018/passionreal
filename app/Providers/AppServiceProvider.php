<?php

namespace App\Providers;

use App\Models\Categoria;
use App\Models\Paquete;
use Illuminate\Support\ServiceProvider;

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
        //
                // $categorias = Categoria::all();
                // $paquetes = Paquete::all();
                // view()->share([
                // 'categorias'=>$categorias,
                // 'paquetes'=>$paquetes
                // ]);

    }
}
