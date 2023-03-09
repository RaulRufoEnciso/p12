<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    public function informacion(){
        return view("mensajeCliente") ->with(["text" => ". Bienvenido Cliente :D"]);
    }
}
