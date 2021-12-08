<?php

namespace App\Providers;

use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Image;
use App\Models\Paquete;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        // $anunciosfor = Anuncio::paginate(3);
        $anuncios=Anuncio::orderBy('updated_at','desc')->paginate(5);

        foreach($anuncios as $anuncio){
            $now = Carbon::now()->format('Y-m-d H:i:s.0');
            // dd($now);
            // dd($anuncio->updated_at->addMinutes(4));
            // dd($anuncio->updated_at->addMinutes(5)->format('Y-m-y H:i:s.0'));
            // dd($now);
            // dd($anuncio);
            if($now >= $anuncio->updated_at->addMinutes(2)->format('Y-m-d H:i:s.0')){
                sleep(1);
                // Anuncio::destroy($anuncio->id);
                $anuncio->update([
                    "updated_at" => $anuncio->touch()
                ]);
                $user = User::findOrFail($anuncio->user_id)->first();
                $creditosPerfil = $user->perfil->creditos;

                $anuncio->user->perfil->update([
                    "creditos"=>$creditosPerfil-1,
                ]);
                // dd($anuncio);
            }
        }

        view()->share([
            'categorias' => $categorias,
            'paquetes' => $paquetes,
            'anuncios' => $anuncios
        ]);
    }
}
