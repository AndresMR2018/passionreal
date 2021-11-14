<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Test;
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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/admin',[HomeController::class,'goDashboard']);
// Route::get('/home', function(){
//     return view('admin.dashboard');
// } );

Route::resource('categoria', CategoriaController::class);
Route::resource('roles', RoleController::class);


