<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//  PONER UN CONTROLADOR EN UNA RUTA, Y LLAMAR A LA FUNCION CORRESPONDIENTE
Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

/* Route::get('/user', function() {
    return view('user');  //PASAR VISTA DESDE EL ENDPOINT
}); */

//  PASAR VISTA POR CONTROLADOR
Route::get('/user', [UserController::class, 'index'])->name('user.index');

//  SE PUEDE PASAR POR UNA ARRAY
Route::get('/metal', function() {
    return view('metal', ['song' => 'The trooper']);
});