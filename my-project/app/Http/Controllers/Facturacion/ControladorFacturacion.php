<?php

namespace App\Http\Controllers\Facturacion;

use App\Http\Controllers\Controller;

class ControladorFacturacion extends Controller
{
    public function facturacion(){
        return view("mensajeFacturacion") ->with(["text" => "Esta to pagaooo !!!"]);
    }
}
