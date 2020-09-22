<?php 
include_once("../estructura/cabecera.php");
include_once("../../control/control_eje1.php");
?>

<?php 
$datos = data_submitted();
$obj = new control_eje1();


$respuesta = $obj->verificarNumero($datos);

?>

<div id="contenido" style="height: 400px; width: 89%;margin-left:10.5%;" >
    
        <p>
        <b>Respuesta: </b> 
        <br>
        <?php echo $respuesta ?>
        </p>
      
</div>



</body>
<?php 
include_once("../estructura/pie.php");
?>