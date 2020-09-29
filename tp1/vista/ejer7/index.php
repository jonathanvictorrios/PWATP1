<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje6.php");

?>
</div>
<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario:

<hr>
    <form id="ejer7" name="ejer7" method="post" action="accion.php" data-toggle="validator" >
    
    <div class="row">
        
        <div class="col-md-3 mb-2">
        <label for="numero1" class="control-label">Numero 1</label>
            <input data-bv-integer = "true" class="form-control" id="numero1" name="numero1" placeholder="Ingrese un numero" required
            type="text" >
            <div class="invalid-feedback">

            </div>
        </div>  
         
    </div>
    <div class="row">

        <div class="col-md-3 mb-2">
            <label for="numero2" class="control-label">Numero 2</label>
            <input data-bv-integer = "true" class="form-control" id="numero2" name="numero2" placeholder="Ingrese otro numero" required
            type="text" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-3 mb-2">
            <div class="form-group">
                <label for="operacion">Seleccione operacion</label>
                <select class="form-control" id="operacion" name="operacion">
                <option>suma</option>
                <option>resta</option>
                <option>multiplicacion</option>
                <option>division</option>
                </select>
            </div>
        </div>    
                
    </div>
    
    <div class="row">
    
        <div class="col-md-3 mb-2">
            <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar">
        </div>  
    </div>
    
    

    


    </form>
</div>


<?php

include_once("../estructura/pie.php");
?>