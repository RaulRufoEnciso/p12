<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrueba extends Controller
{
    public function prueba( Request $request )
    {
        $persona = $request["persona"];
        $textoFinal = "Hola, ";
        $textoFinal .= ($persona == "")?"mundo":$persona;
        return view("mensajePrueba") ->with(["text" => "Esto es un mensaje de prueba"]);
    }
    public function prueba2( Request $request, $persona = "" )
    {
        if($persona == "" && $request["persona"] == ""){
            $textoFinal = "Hola, que tal";
        }elseif ($persona = ""){
            $textoFinal = "Hola ".$request["persona"];
        }else{
            $textoFinal = "Hola ".$persona;
        }
        return view("mensajePrueba") ->with(["text" => "Esto es un mensaje de prueba"]);
    }
    
}
