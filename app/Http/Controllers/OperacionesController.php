<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function saludos($nombres){
        return 'mi nombre es: ' . $nombres;
    }
}
