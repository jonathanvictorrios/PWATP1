<?php

class control_eje5  {



    public function verificarEdad($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $estudio= $datos['nivelEstudios'];
        $sexo=$datos['sexo'];
        $texto ="";
        $textoNivelEstudio="";
        if ($edad >=18)
            $texto =  "Hola yo soy ".$nombre.", ".$apellido." soy mayor de edad , ";
        else
            $texto = "Hola yo soy ".$nombre.", ".$apellido." NO soy mayor de edad , ";
        // print_r($datos);
        if($estudio=="noTiene"){
            $textoNivelEstudio="no tengo estudios";
        }
        else{
            $textoNivelEstudio="mi nivel de estudio es ".$estudio;
        }
        $texto=$texto.$textoNivelEstudio." y mi sexo es ".$sexo;
        return $texto;

    }

}
?>