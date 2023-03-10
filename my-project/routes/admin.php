<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group (['middleware'=>['adb']], function(){
    Route::get('articulos',[ControladorAdmin::class,'articulos']) -> name("admin");
});
