<?php 
include_once("../estructura/cabecera.php");
include_once("../../control/control_eje2.php");
?>

<?php 
$datos = data_submitted();
$obj = new control_eje2();


$respuesta = $obj->calculoCantHoras($datos);

?>

<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
    
        <p>
        <b>Respuesta: </b> 
        <br>
        
        <?php echo "La cantidad de horas por semana es: ".$respuesta ?>
        </p>
        <a class="btn btn-outline-secondary" href="../ejer2/index.php" role="button">Volver atras</a>
      
</div>



</body>
<?php 
include_once("../estructura/pie.php");
?>