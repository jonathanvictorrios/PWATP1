<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje5.php");

?>
</div>
<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
    un mensaje que indique el tipo de estudios que posee y su sexo.

    <hr>
    <form id="ejer5" name="ejer5" method="get" action="accion.php" data-toggle="validator">
    <div class="row">
        
        <div class="col-md-3 mb-2">
        <label for="nombre" class="control-label">Nombre</label>
            <input class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required
            type="text" >
            <div class="invalid-feedback">
                    asdasdasdasdasdasdasdasd
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

        <div class="col-md-3 mb-2">
            <label for="edad" class="control-label">Edad</label>
            <input data-bv-between = "true" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required
            type="number" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">

        <div class="col-md-3 mb-2">
            <label for="direccion" class="control-label">Direccion</label>
            <input class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion" required
            type="text" >
            <div class="invalid-feedback">

            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-2 mb-2">
            <label for="nivelEstudios" class="control-label">Seleccione nivel de estudios</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="nivelEstudios" id="noTiene" value="noTiene" checked>
                <label class="form-check-label" for="noTiene">
                        No tengo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="nivelEstudios" id="primario" value="primario">
                <label class="form-check-label" for="primario">
                        Primario
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="nivelEstudios" id="secundario" value="secundario">
                <label class="form-check-label" for="secundario">
                    Secundario
                </label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>  
        <div class="col-md-3 mb-2">
            <label for="sexo" class="control-label">Seleccione su sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" checked>
                <label class="form-check-label" for="masculino">
                        Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="femenino" value="femenino">
                <label class="form-check-label" for="femenino">
                        Femenino
                </label>
            </div>
        </div>  

    </div>
    <div class="row">
    
        <div class="col-md-3 mb-2">
            <input id="btn_eje5" class="btn btn-primary" name="btn_eje5" type="submit" value="Enviar">
        </div>  
    </div>
    
    

    


    </form>
</div>


<?php

include_once("../estructura/pie.php");
?>