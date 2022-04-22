<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;
use App\Http\Controllers\OtroController;
use App\Http\Controllers\ControlPrecios;
use App\Http\Controllers\CursoController;#invocación

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
});

Route::get(
    'miprimeraruta', function (){
        return 'Hola mundo';
    });

Route::get('minombre/{nombre}/{edad}',function ($nombre,$edad){
    return 'Hola mi nombre es: '. $nombre. ' y mi edad es: '.$edad;
});

Route::get('otraprueba',function (){
    return 'Hola esto es otra prueba';
});

Route::get('saludo/{nombre}',function ($nombre){
    return 'Hola como estás: '.$nombre;
});


#Heladeria
Route::get('micontrolador',[MiController::class,'prueba']);
Route::get('micontrolador',[MiController::class,'saludo']);
Route::get('micontrolador',[MiController::class,'otraprueba']);
//primero
Route::get('OtroController/{opcion}',[OtroController::class,'opcion']);
//segundo
Route::get('precio/{precio}',[ControlPrecios::class,'descuento']);
//tercero
Route::get('nombre/{nombre}/precio/{precio}',[ControlPrecios::class,'getIva']);

#clase 2
Route::resource('cursos',CursoController::class);#aqui se llaman todos los metodos por eso no se utiliza []

