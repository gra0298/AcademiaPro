<?php

namespace App\Http\Controllers;

#para que use la clase controller

use App\Http\Controllers\Controller;

class  ControlPrecios extends Controller{

    //segundo
    public function descuento($total){
        if(is_numeric($total)){
                
            if($total < 100000){
                echo 'su compra no tiene descuento';
            }
            
            else if($total > 100000 and $total < 150000){
                $descuento = ($total * 0.02);
                $completo = $total - $descuento;
                echo 'el valor total a pagar es '.$completo;
            }
            else if($total > 150000 and $total <= 300000){
                $descuento = ($total * 0.03);
                $completo = $total - $descuento;
                echo 'el valor total a pagar es '.$completo;
            }
            
            else if($total > 300000 and $total <= 500000){
                $descuento = ($total * 0.04);
                $completo = $total - $descuento;
                echo 'el valor total a pagar es '.$completo;
            }
            else if($total > 500000 ){
                $descuento = ($total * 0.05);
                $completo = $total - $descuento;
                echo 'el valor total a pagar es '.$completo;
            }

            else if($total < 0){
                echo 'intente nueva mente';
            }

        }
        else{
            echo 'error,el valor no es numerico';
        }
       
    }
    // tercero
    public function getIva($nombre,$total){
        if(is_numeric($total)){

        $IVA = 0.19;
        $precioFinal = $total+($total * $IVA);
        return '  El artículo '.$nombre.' sin IVA cuesta $'.$total.' y el precio del IVA es de '.$precioFinal;
    }
    else{
        return 'error el valor no es numerico';
    }



    }
}


