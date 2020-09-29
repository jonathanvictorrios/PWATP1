<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje6.php");

?>
</div>
<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la cantidad de deportes que practica.

<hr>
    <form id="ejer6" name="ejer6" method="get" action="accion.php" data-toggle="validator" >
    
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
            <label for="apellido" class="control-label">Apellido</label>
            <input class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required
            type="text" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-3 mb-1">
                <label for="deportes" class="control-label">Seleccione los deportes que practica</label>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-3 mb-2">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  name="deportes[]" value="futbol">
                <label class="form-check-label" for="inlineCheckbox1">futbol</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="basquet">
                <label class="form-check-label" for="inlineCheckbox2">basket</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="tennis">
                <label class="form-check-label" for="inlineCheckbox3">tennis</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="voley">
                <label class="form-check-label" for="inlineCheckbox3">voley</label>
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