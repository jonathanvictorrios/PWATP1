<?php 
include_once("../estructura/cabecera.php");
include_once("../../control/control_eje3.php");
?>

<?php 
$datos = data_submitted();
$obj = new control_eje3();


$respuesta = $obj->verInformacion($datos);

?>

<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
    
        <p>
        <b>Respuesta: </b> 
        <br>
        <?php echo $respuesta ?>
        </p>
      La diferencia entre post y get es que post muestra en el cuadro de direcciones los valores ingresados en cada campo
      pudiendo modificarlos desde dicho cuadro y alterar los resultados , y post solo muestra la url del archivo ejecutado
      <hr>
      <a class="btn btn-outline-secondary" href="../ejer3/index.php" role="button">Volver atras</a>
</div>



</body>
<?php 
include_once("../estructura/pie.php");
?>