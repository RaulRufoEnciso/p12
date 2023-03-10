<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPrueba;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}) -> name("lobby");

Route::get('/prueba',[ControladorPrueba::class,'prueba']) -> name("pruebaa");

//Route::post('/prueba',[ControladorPrueba::class,'prueba2']);

//Route::any('/prueba/{persona?}',[ControladorPrueba::class,'prueba2']);

//Route::match(["get","post"],"/prueba{persona?}",[ControladorPrueba::class,'prueba2']);