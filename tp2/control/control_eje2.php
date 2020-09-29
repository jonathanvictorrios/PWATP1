<?php
class control_eje2{

    public function calculoCantHoras($datos){
        $res=0;
        $hsLunes=$datos['hsLunes'];
        $hsMartes=$datos['hsMartes'];
        $hsMiercoles=$datos['hsMiercoles'];
        $hsJueves=$datos['hsJueves'];
        $hsViernes=$datos['hsViernes'];

        $arregloHsDias=array($hsLunes,$hsMartes,$hsMiercoles,$hsJueves,$hsViernes);
        foreach($arregloHsDias as $elem){
            $res=$res+$elem;
        }
        return $res;
        

    }
    

}




?>