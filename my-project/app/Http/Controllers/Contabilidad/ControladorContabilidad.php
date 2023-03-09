<?php

namespace App\Http\Controllers\Contabilidad;

use App\Http\Controllers\Controller;

class ControladorContabilidad extends Controller
{
    public function contabilidad(){
        return view("mensajeContabilidad") ->with(["text" => "Cosas de contabilidad :D"]);
    }
}
