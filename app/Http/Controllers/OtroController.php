<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtroController extends Controller{
    //primero
    public function opcion($opcion){
        $h=3000;
        if ($opcion == 1){
            $a=500;
            
            echo 'su helado es de chocolate ';
        }
        else if($opcion == 2){
            $a=1000;
            echo 'su helado es de Brownie: ';
        }
        else if($opcion == 3){
            echo 'su helado es de Delicatessen: ';
            $a=1500;
        }

        else{
            echo 'opcion no existe';
        }
        
        return ' su precio es '.  $a. ' y el valor a pagar por helado es: '.$total = $h+ $a;

    }

}


