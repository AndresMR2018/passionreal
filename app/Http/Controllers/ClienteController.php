<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Mail\MensajeRecibido;
use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Credito;
use App\Models\Image;
use App\Models\Orden;
use App\Models\Paquete;
use App\Models\Perfil;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Nette\Utils\Random;
use Carbon\Carbon;


class ClienteController extends Controller
{

    public function validarCuenta(){
        $codigo = mt_rand(1000000000,9999999999);
        Mail::to('gamr130898@gmail.com')->send(new MensajeRecibido($codigo));
        // $codigo = mt_rand(1000000000,9999999999);
        // Mail::send('emails.mensajeRecibido',$codigo,function($smj){
        //     $smj->subject('Correo de contacto');
        //     $smj->to('gamr130898@gmail.com');
        // });
        // Session::flash('mensaje', 'Mensaje enviado');
        return redirect()->route('home.inicio');
    }


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

    // DESARROLLO LOCAL
    public function upload_image($request, $anuncio){
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $ruta=public_path().'/image';
            $file->move($ruta, $name);
            $urlimage = '/image/'.$name;
        }
        $anuncio->images()->create([
            'url'=>$urlimage
        ]);
    }
    // EN PRODUCCION
    // public function upload_image($request, $anuncio){
       
    //     if($request->hasFile('image')){
    //         $file = $request->file('image');
    //         $extension = $request->file('image')->extension();
    //         if($extension=="png" || $extension=="jpg" || $extension=="jpeg"){
    //                 $url = Cloudinary::upload($file->getRealPath(),['folder'=>'testing'])->getSecurePath();
    //                 $anuncio->images()->create([
    //         'url'=>$url
    //     ]);
    //         }else{
    //             $url = Cloudinary::uploadVideo($file->getRealPath(),['folder'=>'testing'])->getSecurePath();
    //             $anuncio->images()->create([
            
    //     ]);'url'=>$url
    //         }
    //     }
        
    // }

    public function postEditarAnuncio(Request $request){

        $anuncio = Anuncio::findOrFail($request->get('anuncio_id'));
        $datosAnuncio = request()->except(['_token','anuncio_id']);
        $anuncio->update([
            "categoria_id"=>$datosAnuncio['categoria_id'],
            "paquete_id"=>$datosAnuncio['paquete_id'],
            "titulo"=>$datosAnuncio['titulo'],
            "descripcion"=>$datosAnuncio['descripcion'],
            "ciudad"=>$datosAnuncio['ciudad'],
            "direccion"=>$datosAnuncio['direccion'],
            "edad"=>$datosAnuncio['edad'],
            "telefono"=>$datosAnuncio['telefono'],
        ]);
        //relacionamos la nueva imagen que añadio
        $this->upload_image($request, $anuncio);

        return back()->with('mensaje','Su anuncio se actualizo con exito!');
      
    }
    
    public function editarAnuncio($id){
        $anuncio = Anuncio::findOrFail($id);
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        return view('pages.editarAnuncio', compact('anuncio','categorias','paquetes'));
    }

    //DESARROLLO LOCAL
    public function upload_file($request , $producto){
        $urlimages = [];
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach($images as $image){
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/image';
            $image->move($ruta,$nombre);
            $urlimages[]['url']='/image/'.$nombre;
            }
        }

      
        $producto->images()->createMany($urlimages);
    }

/// PRODUCCION 
// public function upload_file($request , $producto){
        
//     $urlimages = [];
//     if($request->hasFile('images')){
//         $images = $request->file('images');
//         foreach($images as $image){
//         $originalName =$image-> getClientOriginalName();
//            if(Str::endsWith($originalName, 'mp4')){
//            $url = Cloudinary::uploadVideo($image->getRealPath(),['folder'=>'testing'])->getSecurePath();
//         $urlimages[]['url']=$url;
//             }else{
//                  $url = Cloudinary::upload($image->getRealPath(),['folder'=>'testing'])->getSecurePath();
//         $urlimages[]['url']=$url;
//             }
//         }
//          $producto->images()->createMany($urlimages);
//     }
   
// }

    public function retirarImagen($id){
        Image::destroy($id);
        return back()->with('mensaje','Imagen eliminada de su galería');
    }

    public function guardarAnuncio(Request $request)
    {
     
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
            // 'foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'edad'=>'required|numeric|min:18',
            'telefono'=>'required|string|max:20',
            'paquete_id'=>'required'
        ];
        $mensaje= [
            'required'=>'El :attribute es requerido',
            // 'foto.required'=>'La foto es requerida',
            'categoria_id.required'=>'La categoría es requerida',
            'ciudad.required'=>'La ciudad es requerida',
            'edad.required'=>'La edad es requerida',
            'direccion.required'=>'La dirección es requerida',
            'descripcion.required'=>'La descripción es requerida',
        ];
        $this->validate($request, $campos, $mensaje);
        // if ($request->hasFile('foto')) {
        //     $datosAnuncio['foto'] = $request->file('foto')->store('uploads', 'public');
        // }
        // if($datosAnuncio['foto']==null){
        //     $datosAnuncio['foto']="fda";
        // }
       $anuncio =  Anuncio::create([
            "ciudad" => $request->get('ciudad'),
            "telefono" => $request->get('telefono'),
            "edad" => $request->get('edad'),
            "direccion" => $request->get('direccion'),
            // "foto" =>  $datosAnuncio['foto'],
            "descripcion" => $request->get('descripcion'),
            "titulo" => $request->get('titulo'),
            "paquete_id" => $request->get('paquete_id'),
            "categoria_id" => $request->get('categoria_id'),
            "user_id" => Auth::id(),
        ]);
        $this->upload_file($request,$anuncio);

        $creditos_perfil = $creditos_perfil-1;
        auth()->user()->perfil->update(['creditos'=>$creditos_perfil]);
        return back()->with('mensaje', 'Anuncio publicado!');
    }


    public function eliminarAnuncio($id){
        Anuncio::destroy($id);
        return back()->with('mensaje','Anuncio eliminado');
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
        // if($request['idcredito']==null)
        // return back()->with('mensaje','No ha seleccionado un credito para su compra');

       if($request['idcredito']=="0"){
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        // dd($user);
        $user = DB::table('users')
        ->where('id', $user_id)
        ->update(['credito_gratis' => '1']);
        // $user->update([
        //     "credito_gratis"=>"1"
        // ]);
        
        $cantidad_creditos = 10;
        $user = auth()->user();
        $creditos_actuales = auth()->user()->perfil->creditos;
        $user->perfil->update([
            "creditos"=>$creditos_actuales+$cantidad_creditos,
        ]);
        return back()->with('mensaje','Tus '.$cantidad_creditos.' creditos han sido recargados');
    }else{
        $cantidad_creditos=$request['creditos'];
        $user = auth()->user();
        $creditos_actuales = auth()->user()->perfil->creditos;
        $user->perfil->update([
            "creditos"=>$creditos_actuales+$cantidad_creditos,
        ]);
        // $nowTimeDate = Carbon::now();
        Orden::create([
            "subtotal"=>$request["creditos"]*0.2,
            "fecha_orden"=>"21:40",
            "user_id"=>Auth::id(),
            ]);
//         $paymentPlatform = $this->paymentPlatformResolver->resolveService("paypal");
//          session()->put('paymentPlatformId',"paypal");
// return $paymentPlatform->handlePayment($request);

        return back()->with('mensaje','Tus '.$cantidad_creditos.' creditos han sido recargados');
        // $credito = Credito::find($request['idcredito']);
       
        // $cantidad_creditos = $credito->cantidad;
        // $user = auth()->user();
        // $creditos_actuales = auth()->user()->perfil->creditos;
        // $user->perfil->update([
        //     "creditos"=>$creditos_actuales+$cantidad_creditos,
        // ]);

        // return back()->with('mensaje','Tus '.$cantidad_creditos.' creditos han sido recargados');
    }
      
    }
}
