<?php

class control_eje7  {

    public function realizarOperacion($datos){
    $num1=$datos['numero1'];
    $num2=$datos['numero2'];
    $operacion=$datos['operacion'];
    $respuesta="La operacion seleccionada es: ".$operacion."<br>";


    $respuesta=$respuesta." Los operandos son: ".$num1." y ".$num2."<br>";
    $resultado=$respuesta."El resultado de la operacion es: ";
    switch($operacion){
        case "suma":
            $resultado=$resultado.($num1+$num2);
        break;
        case "resta":
            $resultado=$resultado.($num1-$num2);
        break;
        case "multiplicacion":
            $resultado=$resultado.($num1*$num2);
        break;
        
        case "division":
            $resultado=$resultado.($num1/$num2);
        break;
        }
    return $resultado;
    }
    

}

?>