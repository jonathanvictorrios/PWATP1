
<html>

<body>
<?php

$num1=$_GET["numero1"];
$num2=$_GET["numero2"];
$operacion=$_GET["operacion"];
echo "La operacion seleccionada es: ".$operacion."<br>";


echo "Los operandos son: ".$num1." y ".$num2."<br>";
$resultado="El resultado de la operacion es: ";
switch($operacion){
    case "suma":
        $resultado=$resultado.($num1+$num2);
    break;
    case "resta":
        $resultado=$resultado.($num1-$num2);
    break;
    case "multiplicacion":
        $resultado=$resultado.($num1*$num2);
    break;
}
echo $resultado;

?>
<br>
<a href="ejercicio7.php">Volver Al Inicio</a>
</body>

</html>


