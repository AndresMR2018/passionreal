<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anuncio;
use Twilio\Rest\Client;
use App\Models\Categoria;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\UsersPhoneNumber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeResetPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Nette\Utils\Random;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;



class HomeController extends Controller
{
   
    use RegistersUsers;


    public function index()
    {
        // Artisan::call('schedule:work');
        // $categorias = Categoria::all(); Ahora se cargan desde AppServiceProvider para toda la app
        //$anuncios = Anuncio::Paginate(3);
       
       

        
        return view('pages.index');
    }

    
    public function getPrevPasswordReset(){
        return view('pages.prevRecuperarContrasenia');
    }

    public function postPrevPasswordReset(Request $request){
        $user = DB::table('users')->where('email',$request['email'])->first();
        // Mail::to($request['email'])->send(new MensajeResetPassword());
        $token = Str::random(40);
        return view('pages.recuperarContrasenia',compact('token'));
    }

    public function postPasswordReset(Request $request){
        // dd($request);
        if($request['password'] != $request['password_confirmation'])
            return back()->with('mensaje','Su contraseña no ha sido confirmada correctamente.');

        $user = DB::table('users')->where('email',$request['email'])->first();
       $user->update([
           "password"=>$request['password']
       ]);
       return redirect()->route('login')->with('mensaje','Contraseña actualizada');
    }


  

 public function filtrado(Request $request){
        $titulo = $request->get('titulo');
        $ciudad = $request->get('ciudad');
        $categoria = $request->get('categoria');
        $anuncios = Anuncio::ciudades($ciudad)->categorias($categoria)->titulos($titulo)->paginate(3);
        return view('pages.index', compact('anuncios'));
    }

    public function findByCategoria($id)
    {

        $anunciosByCategoria = Anuncio::where('categoria_id',$id)->get();
        // $cantidadAnuncios = Anuncio::count();
        // $categoriasByName = Categoria::where('nombre', $nombre)->get();
        // dd($categorias);
        return view('pages.anunciosByCategoria', compact('anunciosByCategoria'));
    }

    public function findAllCategorias(){

        // Agrupamos los anuncios por categoria
        $anuncios = Anuncio::select(DB::raw('count(*) as ads_count, categoria_id'))
             ->groupBy('categoria_id')
             ->get();
           
                 $categorias = Categoria::all();
        return view('pages.categorias', compact('categorias','anuncios'));
    }

    


    public function detalleAnuncio($id)
    {
        $anuncio = Anuncio::findOrFail($id)->first();
        $categorias2 = Categoria::all();

        return view('pages.detalleAnuncio', compact('anuncio','categorias2'));
    }


    protected function postValidarCuenta(Request $request)
    {
        $campos=[
            'password'=>'required|string|min:8',
            'email'=>'required|unique:users|email|min:8',
            'name'=>'required|min:3'
        ];
        $advertencia= [
            'required'=>'El :attribute es requerido',
            'name.min'=>'El nombre debe tener un mínimo de 3 caracteres',
            'password.min'=>'La contraseña debe tener un mínimo de 8 caracteres',
            'min'=>'El :attribute no debe tener menos de :min caracteres',
            'password.required'=>'La contraseña es requerida',
            'email.required'=>'El correo es necesario',
            'name.required'=>'El nombre es requerido y debe tener mas de 3 caracteres',
        ];

        $this->validate($request, $campos, $advertencia);

            if($request['password'] != $request['password_confirmation'])
            return back()->with('advertencia','Asegurese de confirmar correctamente su contraseña');

        $opValidar = $request['opcionValidar'];
        //     $registro = new RegisterController();
        // $usuarioCreado = $registro->create($data);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        //asignamos un rol de cliente al usuario que se registre
        $user->assignRole('Client');
        $user->perfil()->create([
            'telefono' => '0987654321',
            'dni' => '2100000000',
            'foto' => '',
            'nombre' => 'edite su nombre',
        ]); //creamos el perfil vacio
        Auth::login($user);
        //generamos el codigo random
        

        if ($opValidar == "No" && $user->hasRole('Client')){
            return redirect()->route('home.inicio');
        } else {
            if ($opValidar == "Si" && $user->hasRole('Client')){
                $key = mt_rand(1000000000,9999999999);
                return view('pages.validarCuenta', compact('key'));
            }else
                return view('admin.dashboard');
        }
    }

    public function getValidarCuenta()
    {
        $key = mt_rand(1000000000,9999999999);
        // Mail::to('gamr130898@gmail.com')->send(new MensajeRecibido($codigo));//enviamos el mail al correo del cliente que se registro
       dd($key);
     return view('pages.validarCuenta', compact('key'));
    }

    public function validacionCuenta(Request $request)
    {
        //si decide validar la cuenta, creamos la solicitud para que sea validada por el admin
        $url="";
        $datosValidacion = request()->except('_token');
        if ($request->hasFile('foto')){
            $datosValidacion['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        Solicitud::create([
            'user_id' => Auth::id(),
            'codigo_generado' => $request['key'],
            'codigo_enviado' => $request['codigo_enviado'],
            'foto' => $datosValidacion['foto'],
        ]);
        // if ($request->hasFile('foto')) {
        //     $file = $datosValidacion['foto'];
        //       $url = Cloudinary::upload($file->getRealPath(),['folder'=>'solicitudes'])->getSecurePath();
        // }

        // $solicitud = Solicitud::create([
        //     'user_id' => Auth::id(),
        //      'codigo_generado' => $request['key'],
        //     'codigo_enviado' => $request['codigo_enviado'],
        //     'foto' => $url,
        // ]);
        return redirect()->route('home.inicio')->with('mensaje', 'Solicitud de registro enviada. Por la comodidad y bienestar de nuestros usuarios PassionReal se tomará unos minutos hasta validar sus datos.');
    }

    public function cuentaBaneada(){
        return view('pages.cuentaBaneada');
    }


}
