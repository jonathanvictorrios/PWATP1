<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje6.php");

?>
</div>
<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.

<hr>
    <form id="ejer8" name="ejer8" method="post" action="accion.php" data-toggle="validator" >
    
    <div class="row">
        
        <div class="col-md-3 mb-2">
        <label for="edad" class="control-label">Edad</label>
            <input data-bv-between = "true" class="form-control" id="edad" name="edad" placeholder="Ingrese edad" required
            type="number" >
            <div class="invalid-feedback">

            </div>
        </div>  
         
    </div>
    <div class="row">
        <div class="col-md-3 mb-2">
        <label for="estudiante" class="control-label">Indique si es o no estudiante</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estudiante" id="esEstudiante" value="esEstudiante" checked>
                <label class="form-check-label" for="estudiante">
                        Si
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estudiante" id="noEsEstudiante" value="noEsEstudiante">
                <label class="form-check-label" for="estudiante">
                        No
                </label>
            </div>
        </div>  
    </div>
    
    <div class="row">
    
        <div class="col-md-3 mb-2">
            <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar">
            <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="reset" value="Borrar">
        </div>  
    </div>
    
    

    


    </form>
</div>


<?php

include_once("../estructura/pie.php");
?>