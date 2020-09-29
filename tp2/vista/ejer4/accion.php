<?php 
include_once("../estructura/cabecera.php");
include_once("../../control/control_eje4.php");
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/4.5.2/style.css" media="screen" />
<?php 
$datos = data_submitted();
$obj = new control_eje4();


$respuesta = $obj->mostrarInformacion($datos);

?>

<div id="contenido" style="height: 720px; width: 89%;margin-left:10.5%;" >
        <div class="cartelito">
                <div class="alert alert-success col-sm-12" role="alert">
                        <div class="botoncitoCerrar">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        
                        <h4 class="alert-heading text-info">La pelicula introducida es</h4>
                        <br>
                        <?php 
                        echo $respuesta
                        ?>
                </div>

        </div>
        <hr>
        <a class="btn btn-outline-secondary" href="../ejer4/index.php" role="button">Volver atras</a>
      
</div>



</body>
<?php 
include_once("../estructura/pie.php");
?>