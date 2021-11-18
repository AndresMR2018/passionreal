<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $categorias = Categoria::all();
        return view('pages.index');
    }

    public function findByCategoria($nombre){
        $categoriasByName = Categoria::where('nombre',$nombre)->get();
        // dd($categorias);
        return view('pages.categorias', compact('categoriasByName'));
    }

    public function crearAnuncio(){
        $user_id = Auth::id();
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        // dd($user_id);
         return view('pages.publicarAnuncio',compact('categorias','paquetes','user_id'));
    }

    public function guardarAnuncio(Request $request){

        Anuncio::create([
            "ciudad"=>$request->get('ciudad'),
            "telefono"=>$request->get('telefono'),
            "edad"=>$request->get('edad'),
            "direccion"=>$request->get('direccion'),
            "paquete_id"=>$request->get('paquete_id'),
            "categoria_id"=>$request->get('categoria_id'),
            "user_id"=>Auth::id(),
            "descripcion"=>$request->get('descripcion'),
            "titulo"=>$request->get('titulo')
        ]);

        return back()->with('mensaje','Anuncio publicado!');
    }

    public function detalleAnuncio(){

        return view('pages.detalleAnuncio');
    }

    public function miCuenta(){
        return view('pages.miCuenta');
    }

    public function misAnuncios(){
        return view('pages.misAnuncios');
    }


}
