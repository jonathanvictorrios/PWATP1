<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje3.php");

?>
</div>
<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias

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