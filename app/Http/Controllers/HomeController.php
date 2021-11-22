<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anuncio;
use App\Models\Paquete;
use Twilio\Rest\Client;
use App\Models\Categoria;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\UsersPhoneNumber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Auth\RegisterController;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;



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
    use RegistersUsers;
   

    public function index()
    {
        // $categorias = Categoria::all();
        $anuncios = Anuncio::Paginate(3);
        return view('pages.index',compact('anuncios'));
    }


    public function findByCategoria($nombre)
    {
        $categoriasByName = Categoria::where('nombre', $nombre)->get();
        // dd($categorias);
        return view('pages.categorias', compact('categoriasByName'));
    }

   

    public function detalleAnuncio($id)
    {
        $anuncio = Anuncio::findOrFail($id);

        return view('pages.detalleAnuncio',compact('anuncio'));
    }


    protected function postValidarCuenta(Request $request){

        // $validatedData = $request->validate([
        //     'telefono' => 'required|numeric'
        // ]);

        $opValidar = $request['opcionValidar'];
    //     $registro = new RegisterController();
    // $usuarioCreado = $registro->create($data);
            $user= User::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => Hash::make($request['password']),
       ]);
       $user->perfil()->create([
        'telefono'=>'0987654321',
        'dni'=>'2100000000',
        'foto'=>'',
        'nombre'=>'edite su nombre',
       ]);//creamos el perfil vacio
       Auth::login($user);

       if($opValidar=="No"){
        return redirect()->route('home.inicio');
       }
       else{
           return redirect()->route('home.getValidarCuenta');
       }
    }

    public function getValidarCuenta(){
        return view('pages.validarCuenta');
    }

    public function validacionCuenta(Request $request){
        //si decide validar la cuenta, creamos la solicitud para que sea validada por el admin
        $datosValidacion = request()->except('_token');
        if($request->hasFile('foto')){
            $datosValidacion['foto']=$request->file('foto')->store('uploads','public');
        }

        Solicitud::create([
           'user_id'=>Auth::id(),
           'codigo_enviado'=>$request['codigo_enviado'],
           'foto'=>$datosValidacion['foto'],
          ]);

       return redirect()->route('home.inicio')->with('mensaje','Solicitud de registro enviada. Por la comodidad y bienestar de nuestros usuarios PassionReal se tomará unos minutos hasta validar sus datos.');
   }


    public function storePhoneNumber(Request $request)
    {
        //run validation on data sent in
        $validatedData = $request->validate([
            'phone_number' => 'required|unique:users_phone_number|numeric',
        ]);
        $user_phone_number_model = new UsersPhoneNumber($request->all());
        $user_phone_number_model->save();
        $this->sendMessage('User registration successful!!', $request->phone_number);
        return back()->with(['success' => "{$request->phone_number} registered"]);
    }

private function sendMessage($message, $recipients)
{

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $account_sid = getenv("TWILIO_SID");
    $auth_token = getenv("TWILIO_AUTH_TOKEN");
    $twilio_number = getenv("TWILIO_NUMBER");
    $client = new Client($account_sid, $auth_token);
    $client->messages->create($recipients, 
            ['from' => $twilio_number, 'body' => $message] );
}

public function sendCustomMessage(Request $request)
{
    $validatedData = $request->validate([
        'users' => 'required|array',
        'body' => 'required',
    ]);
    $recipients = $validatedData["users"];
    // iterate over the array of recipients and send a twilio request for each
    foreach ($recipients as $recipient) {
        $this->sendMessage($validatedData["body"], $recipient);
    }
    return back()->with(['success' => "Messages on their way!"]);
}

public function show()
{
    $users = UsersPhoneNumber::all(); //query db with model
    return view('bienvenida', compact("users")); //return view with data
}
    
}
