<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Test;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/categoria/{nombre}', [HomeController::class, 'findByCategoria'])->name('home.find_by_categoria');
Route::get('/publicar-anuncio', [HomeController::class, 'crearAnuncio'])->middleware('auth')->name('home.crearAnuncio');
Route::get('/mi-cuenta', [HomeController::class, 'miCuenta'])->middleware('auth')->name('home.miCuenta');
ROute::get('/mis-anuncios', [HomeController::class, 'misAnuncios'])->middleware('auth')->name('home.misAnuncios');
Route::post('/publicar-anuncio', [HomeController::class, 'guardarAnuncio'])->middleware('auth')->name('home.guardarAnuncio');


Route::get('/detalle', [HomeController::class, 'detalleAnuncio'])->name('home.detalleAnuncio');
ROute::get('/creditos', [HomeController::class, 'creditos'])->middleware('auth')->name('home.creditos');

// VISTAS DE ADMINISTRADOR
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'goDashboard']);
    Route::resource('categoria', CategoriaController::class);
    Route::resource('paquete', PaqueteController::class);
    Route::resource('anuncio', AnuncioController::class);
    Route::resource('roles', RoleController::class);
});
