<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Image;
use App\Models\Orden;
use App\Models\Perfil;
use App\Models\Anuncio;
use App\Models\Cliente;
use App\Models\Credito;
use App\Models\Paquete;
use Nette\Utils\Random;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreClienteRequest;
use App\Resolvers\PaymentPlatformResolver;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Reporte;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ClienteController extends Controller
{


    protected $paymentPlatformResolver;
    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }
    public function validarCuenta()
    {
        $codigo = mt_rand(1000000000, 9999999999);
        Mail::to('gamr130898@gmail.com')->send(new MensajeRecibido($codigo));
        // $codigo = mt_rand(1000000000,9999999999);
        // Mail::send('emails.mensajeRecibido',$codigo,function($smj){
        //     $smj->subject('Correo de contacto');
        //     $smj->to('gamr130898@gmail.com');
        // });
        // Session::flash('mensaje', 'Mensaje enviado');
        return redirect()->route('home.inicio');
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

// LOCAL
public function upload_image($request, $anuncio){
      
    $file = $request->file('image');
    $name = time().'_'.$file->getClientOriginalName();
    $ruta=public_path().'/imgs/anuncios/';
    $file->move($ruta, $name);
    $urlimage = '/imgs/anuncios/'.$name;
$anuncio->images()->create([
    'url'=>$urlimage
]);

}

    // EN PRODUCCION
    // public function upload_image($request, $anuncio)
    // {

    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $extension = $request->file('image')->extension();
    //         if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
    //             $url = Cloudinary::upload($file->getRealPath(), ['folder' => 'testing'])->getSecurePath();
    //             $anuncio->images()->create([
    //                 'url' => $url
    //             ]);
    //         } else {
    //             $url = Cloudinary::uploadVideo($file->getRealPath(), ['folder' => 'testing'])->getSecurePath();
    //             $anuncio->images()->create([
    //                 'url' => $url
    //             ]);
    //         }
    //     }
    // }

    public function postEditarAnuncio(Request $request)
    {

        $anuncio = Anuncio::findOrFail($request->get('anuncio_id'));
        $datosAnuncio = request()->except(['_token', 'anuncio_id']);
        $anuncio->update([
            "categoria_id" => $datosAnuncio['categoria_id'],
            "paquete_id" => $datosAnuncio['paquete_id'],
            "titulo" => $datosAnuncio['titulo'],
            "descripcion" => $datosAnuncio['descripcion'],
            "ciudad" => $datosAnuncio['ciudad'],
            "direccion" => $datosAnuncio['direccion'],
            "edad" => $datosAnuncio['edad'],
            "telefono" => $datosAnuncio['telefono'],
        ]);
        //relacionamos la nueva imagen que añadio
        $this->upload_image($request, $anuncio);

        return back()->with('mensaje', 'Su anuncio se actualizo con exito!');
    }

    public function editarAnuncio($id)
    {
        $anuncio = Anuncio::findOrFail($id);
        $categorias = Categoria::all();
        $paquetes = Paquete::all();
        return view('pages.editarAnuncio', compact('anuncio', 'categorias', 'paquetes'));
    }



    public function upload_file($request, $producto)
    {
        $urlimages = [];
        if ($request->hasFile('images')) {
          
            $images = $request->file('images');
            $this->validate($request, [
                'images'   => 'required',
                'images.*' => 'image|mimes:png,jpg,jpeg|dimensions:min_width=800,min_height=200,max_width:1800,max_height:600|max:5000',
            ],[
                'images.*.required'=>'La imagen es requerida',
                'images.*.image'=>'El archivo tienen que ser una imagen',
                'images.*.mimes'=>'La imagen debe ser tipo png, jpg o jpeg',
                'images.*.dimensions'=>'La imagen no cumple con las dimensiones 800x200 mínimo; 1800x600 máximo',
                'images.*.max'=>'La imagen supera el peso permitido (5Megabytes)'
            ]);
            foreach ($images as $image) {
                $nombre = time() . $image->getClientOriginalName();
                $ruta = public_path() . '/imgs/anuncios/';
                $image->move($ruta, $nombre);
                $urlimages[]['url'] = '/imgs/anuncios/' . $nombre;
            }
        }
       
        return $urlimages;
    }
    /// PRODUCCION 
    // public function upload_file($request , $producto){

    //     $urlimages = [];
    //     if($request->hasFile('images')){
    //         $images = $request->file('images');
    //         foreach($images as $image){
    //         $originalName =$image-> getClientOriginalName();
    //             if(Str::endsWith($originalName, 'mp4')){
    //             $url = Cloudinary::uploadVideo($image->getRealPath(),['folder'=>'testing'])->getSecurePath();
    //         $urlimages[]['url']=$url;
    //             }else{
    //                  $url = Cloudinary::upload($image->getRealPath(),['folder'=>'testing'])->getSecurePath();
    //         $urlimages[]['url']=$url;
    //             }
    //         }
    //          $producto->images()->createMany($urlimages);
    //     }
    // }

    public function retirarImagen($id)
    {
       $imagen =  Image::findOrFail($id);
        $url = $imagen->url;
        $str = substr($url, 1);//quitamos un caracter a la cadena de ruta para eliminar la img
        File::delete($str);//eliminamos la img fisica de nuestro servidor
       
        Image::destroy($id);
        return back()->with('mensaje', 'Imagen eliminada de su galería');
    }

    public function guardarAnuncio(Request $request)
    {
        $creditos_perfil = auth()->user()->perfil->creditos;
        if ($creditos_perfil - 1 < 0) {
            return back()->with('mensaje', 'Ups! al parecer no cuentas con créditos disponibles para publicar tu anuncio.');
        }
        $datosAnuncio = request()->except('_token');
        $campos = [
            'titulo' => 'required|string|max:150',
            'descripcion' => 'required|string|max:400',
            'categoria_id' => 'required',
            'ciudad' => 'required|String|max:100',
            'direccion' => 'required|String|max:100',
            'edad' => 'required|numeric|min:18',
            'telefono' => 'required|string|max:10|min:10',
            'paquete_id' => 'required'
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'titulo.max'=>'Título demasiado largo',
            'categoria_id.required' => 'La categoría es requerida',
            'ciudad.required' => 'La ciudad es requerida',
            'ciudad.max'=>'El nombre de la ciudad es demasiado largo',
            'edad.required' => 'La edad es requerida',
            'edad.min'=> 'La edad no puede ser menor a 18',
            'telefono.min'=>'El teléfono no debe tener menos de 10 dígitos',
            'telefono.max'=>'El teléfono no debe tener mas de 10 dígitos',
            'direccion.required' => 'La dirección es requerida',
            'direccion.max'=>'La direccion no debe tener mas de 100 caracteres',
            'descripcion.required' => 'La descripción es requerida',
            'descripcion.max'=>'La descripción no debe tener mas de 400 caracteres'
        ];
        $this->validate($request, $campos, $mensaje);

        

        $anuncio = new Anuncio;
        $anuncio->titulo = e($request->titulo);
        $anuncio->ciudad = e($request->ciudad);
        $anuncio->telefono = e($request->telefono);
        $anuncio->edad = e($request->edad);
        $anuncio->direccion = e($request->direccion);
        $anuncio->descripcion = e($request->descripcion);
        $anuncio->paquete_id = e($request->paquete_id);
        $anuncio->categoria_id = e($request->categoria_id);
        $anuncio->user_id = Auth::id();
       $url =  $this->upload_file($request, $anuncio);
        $anuncio->save();
        $anuncio->images()->createMany($url);
        // $anuncio =  Anuncio::create([
        //     "ciudad" => $request->get('ciudad'),
        //     "telefono" => $request->get('telefono'),
        //     "edad" => $request->get('edad'),
        //     "direccion" => $request->get('direccion'),
        //     "descripcion" => $request->get('descripcion'),
        //     "titulo" => $request->get('titulo'),
        //     "paquete_id" => $request->get('paquete_id'),
        //     "categoria_id" => $request->get('categoria_id'),
        //     "user_id" => Auth::id(),
        // ]);
       

        $creditos_perfil = $creditos_perfil - 1;
        auth()->user()->perfil->update(['creditos' => $creditos_perfil]);
        return back()->with('mensaje', 'Anuncio publicado!');
    }


    public function eliminarAnuncio($id)
    {
        Anuncio::destroy($id);
        return back()->with('mensaje', 'Anuncio eliminado');
    }



    public function miCuenta()
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $perfil = Perfil::where('user_id', $user_id)->first();
        // dd($perfil);
        return view('pages.miCuenta', ["user" => $user, "perfil" => $perfil]);
    }

    public function editarMiPerfil(Request $request)
    {
        $campos = [
            'dni' => 'required|string|min:10',
            'nombre' => 'required|min:3',
            'telefono' => 'required',
            'foto' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ];
        $advertencia = [
            'required' => 'El :attribute es requerido',
            'nombre.min' => 'El nombre debe tener un mínimo de 3 caracteres',
            // 'telefono.min'=>'El telefono debe tener 10 dígitos',
            'min' => 'El :attribute no debe tener menos de :min caracteres',
            'telefono.required' => 'El teléfono es requerido',
            'dni.required' => 'El dni es requerido',
            'foto.required' => 'La foto es requerida',
        ];

        $this->validate($request, $campos, $advertencia);
        $perfil = Perfil::where('user_id', Auth::id())->first();

        $perfil->update([
            "dni" => $request['dni'],
            "telefono" => $request['telefono'],
            "nombre" => $request['nombre'],
        ]);
        if ($request->hasFile('foto'))
            $this->upload_perfil($request, $perfil);

        return back()->with('mensaje', 'Perfil actualizado!');
    }
    public function upload_perfil($request, $perfil)
    {
        if (!(is_null($perfil->image))) {
            $idimg = $perfil->image->id;
            $url = $perfil->image->url;
            $str = substr($url, 1);//quitamos un caracter a la cadena de ruta para eliminar la img
            File::delete($str);//eliminamos la img fisica de nuestro servidor
            Image::destroy($idimg);
        }
        $file = request()->file('foto');
        $name = time() . '_' . $file->getClientOriginalName();
        $ruta = public_path() . '/imgs/perfil';
        $file->move($ruta, $name);
        $urlimage = '/imgs/perfil/' . $name;
        $perfil->image()->create([
            'url' => $urlimage
        ]);
    }

    public function misAnuncios()
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $anuncios = Anuncio::where('user_id', $user_id)->paginate(3);

        return view('pages.misAnuncios', compact('anuncios', 'user'));
    }

    public function misOrdenes()
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $ordenes = Orden::where('user_id', $user_id)->paginate(3);

        return view('pages.misOrdenes', compact('ordenes', 'user'));
    }

    public function comprarCredito(Request $request)
    {
        if ($request['idcredito'] == "0") {
            $user_id = Auth::id();
            $user = User::findOrFail($user_id);
            // dd($user);
            $user = DB::table('users')
                ->where('id', $user_id)
                ->update(['credito_gratis' => '1']);
            $cantidad_creditos = 10;
            $user = auth()->user();
            $creditos_actuales = auth()->user()->perfil->creditos;
            $user->perfil->update([
                "creditos" => $creditos_actuales + $cantidad_creditos,
            ]);
            return redirect()->route('home.inicio')->with('mensaje', 'Tus ' . $cantidad_creditos . ' creditos han sido recargados');
        } else {

            $cantidad_creditos = $request['creditos'];
            $user = auth()->user();
            $creditos_actuales = auth()->user()->perfil->creditos;
            $user->perfil->update([
                "creditos" => $creditos_actuales + $cantidad_creditos,
            ]);
          $this->validate($request,
            [
                'telefono'=>'required|string|min:10|max:10',
                'dni'=>'required|string|min:10|max:10',
                'nombre-completo'=>'required|string|max:60',
            ],
            ['telefono.required'=>'El teléfono es requerido',
             'telefono.min'=>'El teléfono no debe tener menos de 10 digitos',
             'telefono.max'=>'El teléfono no debe tener mas de 10 digitos',
             'dni.required'=>'El DNI es requerido',
             'dni.min'=>'El dni no debe tener menos de 10 digitos',
             'dni.max'=>'El dni no debe tener mas de 10 digitos',
             'nombre-completo.required'=>'El nombre completo es requerido',
             'nombre-completo.max'=>'El nombre completo es muy largo'
        ]);
        
            // $orden = new Orden();
            // $orden->subtotal = e($request->creditos*0.2);
            // $orden->telefono = e($request->telefono);
            Orden::create([
                "subtotal" => $request["creditos"] * 0.2,
                "telefono" => $request["telefono"],
                "dni" => $request["dni"],
                "nombre-completo" => $request["nombre-completo"],
                "fecha_orden" => Carbon::now(),
                "user_id" => Auth::id(),
            ]);
            //         $paymentPlatform = $this->paymentPlatformResolver->resolveService("paypal");
            //          session()->put('paymentPlatformId',"paypal");
            // return $paymentPlatform->handlePayment($request);

            return redirect()->route('cliente.creditos')->with('mensaje', 'Tus ' . $cantidad_creditos . ' creditos han sido recargados');
        }
    }

    public function getPasarela(Request $request)
    {
        // dd($request);
        $idcredito = $request["idcredito"];

        $creditosx = $request["creditos"];

        return view('pages.pasarela', compact('creditosx', 'idcredito'));
    }

    public function reportar(Request $request)
    {
        $request = $request->except('_token');
        $motivo = $request["minimal-radio"];
        $anuncio = Anuncio::find($request["anuncio_id"]);
        $user = $anuncio->user;
        Reporte::create([
            "motivo" => $motivo,
            "comentario" => $request["comentario"],
            "user_id" => $user->id
        ]);
        return redirect()->route('home.inicio')->with('mensaje', 'Su reporte ha sido realizado');
    }
}