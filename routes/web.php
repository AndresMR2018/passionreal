<?php

use GuzzleHttp\Middleware;
use App\Http\Controllers\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SolicitudController;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes();

//VISTAS DE VISITANTE
Route::get('/', [HomeController::class, 'index'])->name('home.inicio');
Route::post('/post-validar-cuenta', [HomeController::class, 'postValidarCuenta'])->name('home.postValidarCuenta');
Route::get('/validar-cuenta',[HomeController::class,'getValidarCuenta'])->name('home.getValidarCuenta');
Route::post('/validacion-cuenta',[HomeController::class,'validacionCuenta'])->name('home.validacionCuenta');
Route::get('/detalle/{id}', [HomeController::class, 'detalleAnuncio']);
Route::get('/categoria/{nombre}', [HomeController::class, 'findByCategoria'])->name('home.find_by_categoria');


//PERSONAS REGISTRADAS
// Route::resource('anuncio', AnuncioController::class);
Route::get('/creditos', [ClienteController::class, 'creditos'])->middleware('auth')->name('cliente.creditos');
Route::get('/mi-cuenta', [ClienteController::class, 'miCuenta'])->middleware('auth')->name('cliente.miCuenta');
Route::get('/publicar-anuncio', [ClienteController::class, 'crearAnuncio'])->middleware('auth')->name('cliente.crearAnuncio');
Route::post('/publicar-anuncio', [ClienteController::class, 'guardarAnuncio'])->middleware('auth')->name('cliente.guardarAnuncio');
Route::get('/mis-anuncios', [ClienteController::class, 'misAnuncios'])->middleware('auth')->name('cliente.misAnuncios');
Route::post('/editar-perfil',[ClienteController::class,'editarMiPerfil'])->middleware('auth')->name('cliente.editarMiPerfil');

///NOTIFICACIONES
Route::get('/mensaje',[SmsController::class,'sendMessage'])->name('sms.validarCodigo');
Route::get('/show', [HomeController::class,'show']);
Route::post('/show', [HomeController::class,'storePhoneNumber']);
Route::post('/custom', [HomeController::class,'sendCustomMessage']);

//CLOUDINARY

Route::get('/upload',function(){

    return view('imagen');
});
Route::post('/upload',function (Request $request){
    if($request->hasFile('file')){
        $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(),['folder'=>'testing'])->getSecurePath();
        dd($uploadedFileUrl);
    } else {
        return back();
    }
    
    
});
// Route::get('/upload',[HomeController::class,'upload']);
// Route::post('/upload',[HomeController::class,'uploadImg']);



// VISTAS DE ADMINISTRADOR
Route::get('/admin/aprobar-cuenta/{id}',[SolicitudController::class,'aprobarCuenta'])->middleware('auth')->name('solicitud.aprobarCuenta');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'goDashboard']);
    Route::resource('categoria', CategoriaController::class);
    Route::resource('paquete', PaqueteController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('solicitud',SolicitudController::class);
});
