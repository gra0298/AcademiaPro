<?php

namespace App\Http\Controllers;

#para que use la clase controller

use App\Http\Controllers\Controller;

class MiController extends Controller{
    public function prueba(){
        return ' estoy en un controlador';
    }

    public function saludo($nombre){
        return 'hola como estas '.$nombre;
    }

    public function otraprueba(){
        return 'esta es otra prueba';
    }
}
