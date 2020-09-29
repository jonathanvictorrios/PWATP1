<?php

class control_eje4  {


    public function mostrarInformacion($datos){
        $titulo=$datos['titulo'];
        $actores=$datos['actores'];
        $director=$datos['director'];
        $guion=$datos['guion'];
        $produccion=$datos['produccion'];
        $año=$datos['año'];
        $nacionalidad=$datos['nacionalidad'];
        $genero=$datos['genero'];
        $duracion=$datos['duracion'];
        $restriccion=$datos['restriccion'];
        $sinopsis=$datos['sinopsis'];

        $respuesta="<b>Titulo: </b>".$titulo."<br>"."<b>Actores: </b>".$actores.
        "<br>"."<b>Director: </b>".$director."<br>"."<b>Guion: </b>".$guion."<br>"."<b>Produccion: </b>".$produccion.
        "<br>"."<b>Año: </b>".$año."<br>"."<b>Nacionalidad: </b>".$nacionalidad."<br>"."<b>Genero: </b>"
        .$genero."<br><b>Duracion: </b>".$duracion."<br><b>Restriccion: </b> ".$restriccion."<br><b>Sinopsis: </b> ".$sinopsis;;

        
        return $respuesta;
    }
    
    

}
?>