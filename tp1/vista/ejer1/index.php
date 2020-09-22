<?php

include_once("../estructura/cabecera.php");

?>
</div>
<div id="contenido" style="height: 400px; width: 89%;margin-left:10.5%;" >
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior.



    <form id="ejer1" name="ejer1" method="GET" action="accion.php" data-toggle="validator" >
    <div class="row">

        <div class="col-md-3 mb-2">

            <input class="form-control" id="numero" name="numero" placeholder="Ingrese un numero" required
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
