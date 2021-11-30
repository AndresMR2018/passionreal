<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CreditoController;
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
Route::get('/categoria/{id}', [HomeController::class, 'findByCategoria'])->name('home.find_by_categoria');
Route::get('/categorias',[HomeController::class, 'findAllCategorias'])->name('home.findAllCategorias');
Route::get('/buscar',[HomeController::class, 'filtrado'])->name('home.filtrado');

//PERSONAS REGISTRADAS
Route::get('/creditos', [ClienteController::class, 'creditos'])->middleware('cliente')->name('cliente.creditos');
Route::get('/mi-cuenta', [ClienteController::class, 'miCuenta'])->middleware('cliente')->name('cliente.miCuenta');
Route::get('/publicar-anuncio', [ClienteController::class, 'crearAnuncio'])->middleware('cliente')->name('cliente.crearAnuncio');
Route::post('/publicar-anuncio', [ClienteController::class, 'guardarAnuncio'])->middleware('cliente')->name('cliente.guardarAnuncio');
Route::get('/mis-anuncios', [ClienteController::class, 'misAnuncios'])->middleware('cliente')->name('cliente.misAnuncios');
Route::post('/editar-perfil',[ClienteController::class,'editarMiPerfil'])->middleware('cliente')->name('cliente.editarMiPerfil');
Route::get('/editar-anuncio/{id}',[ClienteController::class,'editarAnuncio'])->middleware('cliente')->name('cliente.editarAnuncio');
Route::post('/editar-anuncio',[ClienteController::class,'postEditarAnuncio'])->middleware('cliente')->name('cliente.postEditarAnuncio');
Route::get('/retirar-imagen/{id}',[ClienteController::class,'retirarImagen'])->middleware('cliente');
Route::get('/creditos',[ClienteController::class,'creditos'])->middleware('cliente')->name('cliente.creditos');
Route::post('/creditos',[ClienteController::class,'postCredito'])->middleware('cliente')->name('cliente.postCredito');

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

// VISTAS DE ADMINISTRADOR
Route::get('/admin/aprobar-cuenta/{id}',[SolicitudController::class,'aprobarCuenta'])->middleware('auth')->name('solicitud.aprobarCuenta');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    Route::get('/', [AdminController::class, 'goDashboard'])->name('admin.dashboard');
    Route::resource('categoria', CategoriaController::class);
    Route::resource('credito', CreditoController::class)->names('credito');
    Route::resource('paquete', PaqueteController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('solicitud',SolicitudController::class);
});
