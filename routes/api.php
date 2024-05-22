<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{name?}', function ($name = null) {  //ENTRE {} SE PUEDE PASAR UN PARAMETRO Y CON '?' PUEDE ESTAR O NO EL PARAMETRO
    return 'Hi ' . $name;
})/* ->where('name', '[a-zA-Z]+') */; // EXPRESION REGULAR PARA QUE ACEPTE SOLO STRINGS

Route::get('/products/{id?}', function($id = null) {
    return 'Product id is ' . $id;
})/* ->where('id', '[0-9]+') */;  // EXPRESION REGULAR PARA QUE SOLO ACEPTE NUMEROS 

// LAS EXPRESIONES REGULARES LAS PUEDO PONER EN PROVIDERS

Route::match(['get', 'post'], '/students', function(Request $req) { // CON MATCH DEFINO QUE METODO PUEDE RECIBIR
    return 'Requested method is ' . $req->method();
});

Route::any('/posts', function(Request $req) { // CON MATCH DEFINO QUE METODO PUEDE RECIBIR
    return 'Requested method is ' . $req->method();
});