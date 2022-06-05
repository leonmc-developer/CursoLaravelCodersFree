<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function __invoke(){ //un controlador una unica ruta
            return view('home');
        }
}
