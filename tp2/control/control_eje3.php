<?php

class control_eje3  {

    private $colUsuarios;

    public function __construct(){
        $this->colUsuarios=array();

    }
    public function setColUsuarios($colUsuarios){
        $this->colUsuarios=$colUsuarios;
    }
    public function getColUsuarios(){
        return $this->colUsuarios;
    }
    public function buscarUsuario($datos){
        $nombreUser=$datos['usuario'];
        $passUser=$datos['password'];
        $colUsuarios=$this->getColUsuarios();
        $i=0;
        $cantUsuarios=count($colUsuarios);
        $encontrado=false;
        while($i<$cantUsuarios && $encontrado==false){
            $usuarioActual=$this->getColUsuarios()[$i];
            if($usuarioActual['usuario']==$nombreUser && $usuarioActual['clave']==$passUser){
                
                $encontrado=true;
            }
            else{
                $i++;
            }
        }
        return $encontrado;
    }



}
?>