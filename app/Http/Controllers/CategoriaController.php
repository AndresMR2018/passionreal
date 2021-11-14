<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
   
    public function index()
    {
        $categorias['categorias']=Categoria::Paginate(5);
        return view('admin.categoria.index',$categorias);
    }

  
    public function create()
    {
        //
        return view('admin.categoria.create');
    }

  
    public function store(Request $request)
    {
        $campos=[
            'nombre'=>'required|string|max:30',
            'foto'=>'required|max:100000|mimes:jpeg,png,jpg',
        ];

        $mensaje= [
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La foto es requerida',
            'nombre.required'=>'El nombre es requerido',
        ];

        $this->validate($request, $campos, $mensaje);
        $datosCategoria = request()->except('_token');
        if($request->hasFile('foto')){
            $datosCategoria['foto']=$request->file('foto')->store('uploads','public');
        }

    Categoria::insert($datosCategoria);

   
       
        return redirect('categoria')->with('mensaje','Categoría agregada!');
    }

    public function show(Categoria $categoria)
    {
        //
    }

    public function edit($id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return view('admin.categoria.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria, $id)
    {
        //
        $request->validate([
            'nombre'=>'required|string|unique:categorias,nombre'.$categoria->id
        ]);

$datosCategoria = request()->except(['_token','_method']);

Categoria::where('id','=',$id)->update($datosCategoria);
        return redirect('categoria')->with('mensaje','Categoría actualizada!');
    }

  
    public function destroy($id)
    {
        //
        $categoria=Categoria::destroy($id);
        return redirect('categoria')->with('mensaje','Categoría eliminada!');
    }
}
