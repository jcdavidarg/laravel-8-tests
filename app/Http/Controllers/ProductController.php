<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $fruits = array(
            'Mange',
            'Orange', 
            'Banana', 
            'Apple', 
            'Blueberry'
        );
        
        return view('welcome', compact('fruits'));
    }
}
