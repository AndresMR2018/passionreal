<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Paquete;
use App\Models\Perfil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

  
    public function store(StoreClienteRequest $request)
    {
        //
    }

   
    public function show(Cliente $cliente)
    {
        //
    }

  
    public function edit(Cliente $cliente)
    {
        //
    }

   
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

  
    public function destroy(Cliente $cliente)
    {
        //
    }


    public function crearAnuncio()
    {
        $user_id = Auth::id();
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        // dd($user_id);
        return view('pages.publicarAnuncio', compact('categorias', 'paquetes', 'user_id'));
    }

    public function guardarAnuncio(Request $request)
    {
        // dd($request);
        $datosAnuncio = request()->except('_token');
        // $campos=[
        //     'ciudad'=>'required|String|max:100',
        //     'direccion'=>'required|String|max:15',
        //     'edad'=>'required|numeric|min:18',
        //     'titulo'=>'required|string|max:20',
        //     'descripcion'=>'required|string|max:200',
        //     'telefono'=>'required|string|max:20',
        //     'foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        //     'categoria_id'=>'required|numeric',  
        //     'paquete_id'=>'required|numeric',
        // ];
        // $mensaje= [
        //     'required'=>'El :attribute es requerido',
        //     'foto.required'=>'La foto es requerida',
        //     'descripcion.required'=>'La descripción es requerida',
        //     'categoria_id.required'=>'La categoría es requerida',
        //     'paquete_id.required'=>'El paquete es requerido',
        // ];
        // $this->validate($request, $campos, $mensaje);
        
        if($request->hasFile('foto')){
            $datosAnuncio['foto']=$request->file('foto')->store('uploads','public');
        }

        Anuncio::create([
            "ciudad" => $request->get('ciudad'),
            "telefono" => $request->get('telefono'),
            "edad" => $request->get('edad'),
            "direccion" => $request->get('direccion'),
            "foto"=>  $datosAnuncio['foto'],
            "descripcion" => $request->get('descripcion'),
            "titulo" => $request->get('titulo'),
            "paquete_id" => $request->get('paquete_id'),
            "categoria_id" => $request->get('categoria_id'),
            "user_id" => Auth::id(),
        ]);

        return back()->with('mensaje', 'Anuncio publicado!');
    }

    public function miCuenta()
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $perfil = Perfil::where('user_id',$user_id)->first();
        // dd($perfil);
        return view('pages.miCuenta',compact('user','perfil'));
    }

    public function editarMiPerfil(Request $request){
        $perfil = Perfil::where('user_id',Auth::id())->first();
        $datosCuenta = request()->except('_token');
        if($request->hasFile('foto')){
            $datosCuenta['foto']=$request->file('foto')->store('uploads','public');
        }
        // dd($datosCuenta);
        // dd($datosCuenta);
        $perfil->update([
            "dni"=>$request['dni'],
            "telefono"=>$request['telefono'],
            "nombre"=>$request['nombre'],
            "foto"=>$datosCuenta['foto'],
        ]);

        return back()->with('mensaje','Perfil actualizado!');
    }

    public function misAnuncios()
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $anuncios = Anuncio::where('user_id',$user_id)->get();
        
        return view('pages.misAnuncios',compact('anuncios','user'));
    }

    public function creditos()
    {
        return view('pages.creditos');
    }
}
