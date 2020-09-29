<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje2.php");

?>
</div>
<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana.


<hr>
    <form id="ejer2" name="ejer2" method="GET" action="accion.php" data-toggle="validator" >
    <div class="row">

        <div class="col-md-2 mb-2">
        <label for="nombre" class="control-label">Lunes</label>
            <input data-bv-between = "true" class="form-control " id="hsLunes" name="hsLunes" placeholder="ingrese cant de horas" required
            type="number" >
            <div class="invalid-feedback">
                
            </div>
        </div>  
        <div class="col-md-2 mb-2">
        <label for="nombre" class="control-label">Martes</label>
            <input class="form-control" id="hsMartes" name="hsMartes" placeholder="ingrese cant de horas" required
            type="number" >
            <div class="invalid-feedback">
                
            </div>
        </div>  
        <div class="col-md-2 mb-2">
        <label for="nombre" class="control-label">Miercoles</label>
            <input class="form-control" id="hsMiercoles" name="hsMiercoles" placeholder="ingrese cant de horas" required
            type="number" >
            <div class="invalid-feedback">
                
            </div>
        </div>  
        <div class="col-md-2 mb-2">
        <label for="nombre" class="control-label">Jueves</label>
            <input class="form-control" id="hsJueves" name="hsJueves" placeholder="ingrese cant de horas" required
            type="number" >
            <div class="invalid-feedback">
                
            </div>
        </div>  
        <div class="col-md-2 mb-2">
        <label for="nombre" class="control-label">Viernes</label>
            <input class="form-control" id="hsViernes" name="hsViernes" placeholder="ingrese cant de horas" required
            type="number" >
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