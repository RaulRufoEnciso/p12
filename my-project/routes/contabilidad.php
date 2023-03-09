<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contabilidad\ControladorContabilidad;

Route::group (['middleware'=>['cont']], function(){
    Route::get('contabilidad',[ControladorContabilidad::class,'contabilidad']);
});
