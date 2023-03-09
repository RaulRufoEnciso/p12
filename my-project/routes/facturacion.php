<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Facturacion\ControladorFacturacion;

Route::group (['middleware'=>['fact']], function(){
    Route::get('facturas',[ControladorFacturacion::class,'facturacion']);
});
