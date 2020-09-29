<?php

class control_eje6  {
    public function calcularCantDeportes($datos){
        $cont=0;
        $nombre=$datos['nombre'];
        $apellido=$datos['apellido'];
            if(!empty($datos['deportes'])){
            // Ciclo para mostrar las casillas checked checkbox.
                foreach($datos['deportes'] as $selected){
                    $cont=$cont+1;
                }
            }
            if($cont==0){
                $deportesJuega="no practica ningun deporte";
            }
            else{
                if($cont==1){
                    $deportesJuega="practica 1 deporte";
                }
                else{
                    $deportesJuega="practica ".$cont." deportes";
                }
               
            }
        

        $resultado="El alumno ".$nombre." ".$apellido." ".$deportesJuega;
        return $resultado;
    }
}

?>