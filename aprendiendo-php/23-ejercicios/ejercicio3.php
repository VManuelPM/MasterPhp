<?php
/*
  Ejercicio 3. Interfaz de usuario (formulario) con dos input y 4 botones
 * suma
 * resta 
 * division
 * multiplicar
 */

if (isset($_GET['txtn1']) && isset($_GET['txtn2'])) {
    $n1 = $_GET['txtn1'];
    $n2 = $_GET['txtn2'];
    $resultado = 0;

    if (isset($_GET['btnSuma']) == 'Suma') {
        $resultado = $n1 + $n2;
    } else if (isset($_GET['btnResta']) == 'Resta') {
        $resultado = $n1 - $n2;
    } else if (isset($_GET['btnMulti']) == 'Multiplicar') {
        $resultado = $n1 * $n2;
    } else if (isset($_GET['btnDivi']) == 'Divide') {
        $resultado = $n1 / $n2;
    }
}
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Calculadora ejercicio 3</title>
    </head>
    <body>
        <form action="ejercicio3.php" method="GET">
            <input type="number" placeholder="n1" name="txtn1" required="required"/>
            <input type="number" placeholder="n2" name="txtn2" required="required"/>
            <input type="number" placeholder="resultado" name="txtresul" readonly="readonly" value="<?=$resultado?>"/>
            <br/>
            <input type="submit" value="Suma" name="btnSuma"/>
            <br/>
            <input type="submit" value="Resta" name="btnResta"/>
            <br/>
            <input type="submit" value="Multiplicar" name="btnMulti"/>
            <br/>
            <input type="submit" value="Divide" name="btnDivi"/>
        </form>
    </body>
</html>
