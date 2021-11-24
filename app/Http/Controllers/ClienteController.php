<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Credito;
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

    public function creditos()
    {
        $creditos = Credito::Paginate(3);

        return view('pages.creditos', compact('creditos'));
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
        $creditos_perfil = auth()->user()->perfil->creditos;
        if($creditos_perfil-1 <0 ){
            return back()->with('mensaje','Ups! al parecer se han agotado tus créditos');
        }
       
        
        $datosAnuncio = request()->except('_token');
      
        
        $campos=[
            'titulo'=>'required|string|max:20',
            'descripcion'=>'required|string|max:200',
            'categoria_id'=>'required',
            'ciudad'=>'required|String|max:100',
            'direccion'=>'required|String|max:15',
            'foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'edad'=>'required|numeric|min:18',
            'telefono'=>'required|string|max:20',
            'paquete_id'=>'required'
            
        ];
        $mensaje= [
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La foto es requerida',
            'categoria_id.required'=>'La categoría es requerida',
            'ciudad.required'=>'La ciudad es requerida',
            'edad.required'=>'La edad es requerida',
            'direccion.required'=>'La dirección es requerida',
            'descripcion.required'=>'La descripción es requerida',
        ];
        $this->validate($request, $campos, $mensaje);

        if ($request->hasFile('foto')) {
            $datosAnuncio['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        dd($datosAnuncio);
        if($datosAnuncio['foto']==null){
            $datosAnuncio['foto']="fda";
        }

        

        Anuncio::create([
            "ciudad" => $request->get('ciudad'),
            "telefono" => $request->get('telefono'),
            "edad" => $request->get('edad'),
            "direccion" => $request->get('direccion'),
            "foto" =>  $datosAnuncio['foto'],
            "descripcion" => $request->get('descripcion'),
            "titulo" => $request->get('titulo'),
            "paquete_id" => $request->get('paquete_id'),
            "categoria_id" => $request->get('categoria_id'),
            "user_id" => Auth::id(),
        ]);
        $creditos_perfil = $creditos_perfil-1;
        auth()->user()->perfil->update(['creditos'=>$creditos_perfil]);
        return back()->with('mensaje', 'Anuncio publicado!');
    }

    public function miCuenta()
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $perfil = Perfil::where('user_id', $user_id)->first();
        // dd($perfil);
        return view('pages.miCuenta', compact('user', 'perfil'));
    }

    public function editarMiPerfil(Request $request)
    {
        $perfil = Perfil::where('user_id', Auth::id())->first();
        $datosCuenta = request()->except('_token');
        if ($request->hasFile('foto')) {
            $datosCuenta['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        // dd($datosCuenta);
        // dd($datosCuenta);
        $perfil->update([
            "dni" => $request['dni'],
            "telefono" => $request['telefono'],
            "nombre" => $request['nombre'],
            "foto" => $datosCuenta['foto'],
        ]);

        return back()->with('mensaje', 'Perfil actualizado!');
    }

    public function misAnuncios()
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $anuncios = Anuncio::where('user_id', $user_id)->get();

        return view('pages.misAnuncios', compact('anuncios', 'user'));
    }

    public function postcredito(Request $request)
    {// aqui se compra el credito
        
       
        $credito = Credito::find($request['idcredito']);
       
        $cantidad_creditos = $credito->cantidad;
        $user = auth()->user();
        $creditos_actuales = auth()->user()->perfil->creditos;
        $user->perfil->update([
            "creditos"=>$creditos_actuales+$cantidad_creditos,
        ]);

        $pagoPaypal = $request['minimal-radio1'];
        // $pagoTarjeta = $request['minimal-radio2'];
        if($pagoPaypal == "on")
            $mpago=1;
        else
            $mpago=2;

        return back()->with('mensaje','Tus '.$cantidad_creditos.' creditos han sido recargados');

    }
}
