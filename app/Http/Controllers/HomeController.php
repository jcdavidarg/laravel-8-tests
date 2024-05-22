<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   // CONTROLADOR INDEX
    public function index($name = null) {
        return isset($name) ? 'Hi from HomeController. Name: ' . $name : 'Hi from HomeController.';
    }
}
