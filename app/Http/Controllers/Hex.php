<?php

namespace primerApp\Http\Controllers;

use Illuminate\Http\Request;

class Hex extends Controller
{
    public function Hex (){
        return view("Vistas.Hexaware");
    }
    //
    public function Login (){
        return view("Layouts.IndexL");
    }
    public function Register (){
        return view("Layouts.IndexR");
    }

    public function contador(){
        return view('Layouts.contador');
    }
}
