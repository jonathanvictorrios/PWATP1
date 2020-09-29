<?php

class control_eje8 {

    public function calcularPrecio($datos){
        $edad=$datos['edad'];
        $esEstudiante=$datos['estudiante'];
        $precio=300;
        if($esEstudiante=="esEstudiante"){
            if($edad>=12){
                $precio=180;
            }
            else{
                $precio=160;
            }
        }
        else{
            if($edad<12){
                $precio=160;
            }

        }
        return $precio;
    }



}
?>