<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Paquete;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    public function index()
    {
        //
        return view('admin.anuncio.index');
    }

   
    public function create()
    {
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        $user_id = auth()->user()->id;
        dd($user_id);
         return view('admin.anuncio.create',compact('categorias','paquetes'));
    }

    public function store(Request $request)
    {
        $campos=[
            'ciudad'=>'required|String|max:100',
            'direccion'=>'required|String|max:15',
            'edad'=>'required|numeric|min:18',
            'titulo'=>'required|string|max:20',
            'descripcion'=>'required|string|max:200',
            'telefono'=>'required|string|max:20',
            'foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'categoria_id'=>'required|numeric',  
            'paquete_id'=>'required|numeric',
        ];
        $mensaje= [
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La foto es requerida',
            'descripcion.required'=>'La descripción es requerida',
            'categoria_id.required'=>'La categoría es requerida',
            'paquete_id.required'=>'El paquete es requerido',
        ];
        $this->validate($request, $campos, $mensaje);
        //se valida la info que llega
        //y se presentan los posibles mensajes en caso
        //de haber campos vacios

        $datosAnuncio = request()->except('_token');
            if($request->hasFile('foto')){
                $datosAnuncio['foto']=$request->file('foto')->store('uploads','public');
            }

        Anuncio::insert($datosAnuncio);

        return redirect('anuncio')->with('mensaje','Anuncio agregado!');
    }

 
    public function show(Anuncio $anuncio)
    {
        //
    }

    
  
    public function edit(Anuncio $anuncio)
    {
        //
    }


    public function update(Request $request, Anuncio $anuncio)
    {
        //
    }

 
    public function destroy(Anuncio $anuncio)
    {
        //
    }
}
