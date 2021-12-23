<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use App\Models\Image;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        
        return view('admin.categoria.index', compact('categorias'));
    }


    public function create()
    {
        //
        return view('admin.categoria.create');
    }

    public function store(Request $request)
    {
        // $campos=[
        //     'nombre'=>'required|string|max:30',
        //     'foto'=>'required|max:100000|mimes:jpeg,png,jpg',
        // ];

        // $mensaje= [
        //     'required'=>'El :attribute es requerido',
        //     'foto.required'=>'La foto es requerida',
        //     'nombre.required'=>'El nombre es requerido',
        // ];

        // $this->validate($request, $campos, $mensaje);
        $request = $request->except('_token');
        $categoria = Categoria::create([
            "nombre" => $request['nombre']
        ]);
        if (request()->hasFile('foto')) {
            $this->upload_image($request, $categoria);
        }

        return redirect()->route('categoria.index')->with('mensaje', 'Categoría agregada!');
    }

    public function upload_image($request, $categoria)
    {

        $file = request()->file('foto');
        $name = time() . '_' . $file->getClientOriginalName();
        $ruta = public_path() . '/imgs/categoria';
        $file->move($ruta, $name);
        $urlimage = '/imgs/categoria/' . $name;

        $categoria->image()->create([
            'url' => $urlimage
        ]);
    }
    // public function store(Request $request)
    // {
    //     $campos = [
    //         'nombre' => 'required|string|max:30',
    //         'foto' => 'required|max:100000|mimes:jpeg,png,jpg',
    //     ];

    //     $mensaje = [
    //         'required' => 'El :attribute es requerido',
    //         'foto.required' => 'La foto es requerida',
    //         'nombre.required' => 'El nombre es requerido',
    //     ];

    //     $this->validate($request, $campos, $mensaje);
    //     $datosCategoria = request()->except('_token');
    //     if ($request->hasFile('foto')) {
    //         $file = $datosCategoria['foto'];
    //         $url = Cloudinary::upload($file->getRealPath(), ['folder' => 'categorias'])->getSecurePath();
    //     }

    //     Categoria::create([
    //         'nombre' => $request['nombre'],
    //         'foto' => $url
    //     ]);

    //     return redirect('admin/categoria')->with('mensaje', 'Categoría agregada!');
    // }

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

    public function update(Request $request, $id)
    {
        $datosCategoria = request()->except(['_token', '_method']);
        $categoria = Categoria::findOrFail($id);
        $categoria->update([
            "nombre" => $request['nombre']
        ]);
        if ($request->hasFile('foto')) {
            $this->upload_categoria($request, $categoria);
        }
        return redirect()->route('categoria.index')->with('mensaje', 'Categoría actualizada!');
    }

    public function upload_categoria($request, $categoria)
    {
        if (!(is_null($categoria->image))) {
            $idimg = $categoria->image->id;
            $url = $categoria->image->url;
            $str = substr($url, 1);//quitamos un caracter a la cadena de ruta para eliminar la img
            File::delete($str);//eliminamos la img fisica de nuestro servidor
            Image::destroy($idimg);
        }
        $file = request()->file('foto');
        $name = time() . '_' . $file->getClientOriginalName();
        $ruta = public_path() . '/imgs/categoria';
        $file->move($ruta, $name);
        $urlimage = '/imgs/categoria/' . $name;
        $categoria->image()->create([
            'url' => $urlimage
        ]);
    }



    public function destroy($id)
    {
        $categoria = Categoria::destroy($id);
        return redirect('admin/categoria')->with('mensaje', 'Categoría eliminada!');
    }
}
