<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje4.php");

?>
</div>
<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes.

<hr>
    <form id="ejer3" name="ejer3" method="post" action="accion.php" data-toggle="validator" >
    <div class="row">
        
        <div class="col-md-3 mb-2">
        <label for="nombre" class="control-label">Nombre</label>
            <input class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required
            type="text" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">

        <div class="col-md-3 mb-2">
            <label for="nombre" class="control-label">Apellido</label>
            <input class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required
            type="text" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">

        <div class="col-md-3 mb-2">
            <label for="nombre" class="control-label">Edad</label>
            <input data-bv-between = "true" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required
            type="number" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">

        <div class="col-md-3 mb-2">
            <label for="nombre" class="control-label">Direccion</label>
            <input class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion" required
            type="text" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar">
        </div>  
    </div>
    

    


    </form>
</div>


<?php

include_once("../estructura/pie.php");
?>