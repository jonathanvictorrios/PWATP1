<?php 
include_once("../estructura/cabecera.php");
include_once("../../control/control_eje6.php");
?>

<?php 
$datos = data_submitted();
$obj = new control_eje6();


$respuesta = $obj->calcularCantDeportes($datos);

?>

<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
    
        <p>
        <b>Respuesta: </b> 
        <br>
        <?php echo $respuesta ?>
        </p>
        <hr>
        <a class="btn btn-outline-secondary" href="../ejer6/index.php" role="button">Volver atras</a>
      
</div>



</body>
<?php 
include_once("../estructura/pie.php");
?>