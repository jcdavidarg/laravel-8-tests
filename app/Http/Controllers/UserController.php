<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {

        $name = 'DAVID';
        //$name = null;

        $users = array(
            "name" => "Lucas",
            "email" => "lucasj@gmail.com",
            "phone" => "1234567890"
        );

        return view('user', compact('name', 'users')); //COMPACT PARA PASAR EN UN ARRAY VARIABLES
    }
}
