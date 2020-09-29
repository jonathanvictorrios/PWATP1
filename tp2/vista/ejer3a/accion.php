<?php 
include_once("../estructura/cabecera.php");
include_once("../../control/control_eje3.php");
?>

<?php 
$datos = data_submitted();

$obj = new control_eje3();


$usuario1=["usuario" => "jonathan","clave" => 111999];
$usuario2=["usuario" => "sabri","clave" => 111555];
$usuario3=["usuario" => "dario","clave" => 22233];
$usuarios=array($usuario1,$usuario2,$usuario3);
$obj->setColUsuarios($usuarios);
$respuesta=$obj->buscarUsuario($datos);

?>

<div id="contenido" style="height: 650px; width: 89%;margin-left:10.5%;" >
    
        <p>
        <b>Respuesta: </b> 
        <br>
        <?php 

        if($respuesta==true){
          echo "Bienvenido ".$datos['usuario'];
        }
        else{
          echo "El usuario o contraseña son incorrectas";
        }
        
        
        
        
        
        ?>
        </p>
        <hr>
        <a class="btn btn-outline-secondary" href="../ejer3a/index.php" role="button">Volver atras</a>
      
</div>



</body>
<?php 
include_once("../estructura/pie.php");
?>