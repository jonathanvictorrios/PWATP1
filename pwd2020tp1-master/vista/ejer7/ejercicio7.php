
<?php
include_once("../estructura/cabecera.php");
?>

    <form id="formoperaciones" name ="formoperaciones" action="procesarInfoE7.php" method="get" >
        <table>
            <tr>
                <td>Numeroasdas 1:
                    <br>
                    <input id="numero1" name="numero1" type="text"/>
                </td>
            </tr>
            <tr>
                <td>
                    Numero 2: <br><input id="numero2" name="numero2" type="text"/>
                </td>
            </tr>
            <tr>
                <td>
                    <select id="operacion" name="operacion">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicacion</option>
                    </select>
                </td>
                <td>
                    <input type="submit" value="Enviar">
                </td>
                
            </tr>

        </table>
    </form> 
</body>

</html>