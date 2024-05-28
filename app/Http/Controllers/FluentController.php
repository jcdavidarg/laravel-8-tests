<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index() {
        //  IMPRIMIR UN H1
        echo '<h1>Fluent String</h1>';

        //  LLAMA A LA FUNCION STATICA OF Y AFTER PARA MOSTRAR DESPUES DE ...
        $slice = Str::of('Welcome to my Learning Space')->after('Welcome to');
        echo $slice . '<br>';

        //  LLAMA A LA FUNCION STATICA OF Y AFTERLAST PARA DESPUES DE LA ULTIMA
        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        //  LLAMA A LA FUNCION STATICA OF Y APPEND PARA ADJUNTAR O UNIR 
        $string = Str::of('Hello ')->append('Word!');
        echo $string . '<br>';  

        //  LLAMA A LA FUNCION STATICA OF Y LOWER PARA PONER EN MINUSCULA
        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        //  LLAMA A LA FUNCION STATICA OF Y REPLACE PARA REEMPLAZAR ALGUN STRING
        $replaced = Str::of('Laravel 7.0')->replace('7.0', '8.0');
        echo $replaced . '<br>';

        //  LO TRANSFORMA A TITULO CON LAS PRIMERAS LETRAS EN MAYUSCULAS
        $converted = Str::of('this is a title')->title();
        echo $converted . '<br>';

        //  PEGA LAS PALABRAS CON ALGUN STRING DEFINIDO
        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug . '<br>';

        //  DEVUELVE A PARTIR DEL INDICE QUE SE LE ASIGNE HASTA EL INDICE QUE SE PONGA COMO 2DO PARAMETRO
        $str = Str::of('Laravel Framework')->substr(8, 5);
        echo $str . '<br>';

        //  QUITA LO QUE SE LE PASEC COMO PARAMETRO
        $str2 = Str::of('/Laravel8/')->trim('/');
        echo $str2 . '<br>';

        //  PONE EN MAYUSCULA
        $str3 = Str::of('laravel 8')->upper();
        echo $str3 . '<br>';
    }
}
