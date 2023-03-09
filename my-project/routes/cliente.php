<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente\ControladorCliente;

Route::group (['middleware'=>['cli']], function(){
    Route::get('info',[ControladorCliente::class,'informacion']);
});
