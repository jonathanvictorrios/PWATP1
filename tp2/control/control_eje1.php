<?php
class control_eje1{

    public function verificarNumero($datos){
        $numero = $datos['numero'];
        $respuesta="El numero es cero";
        if($numero>0){
            $respuesta="El numero es positivo";

        }
        else{
            if($numero<0){
                $respuesta="El numero es negativo";
            }
        }
        return $respuesta;
    }


}




?>