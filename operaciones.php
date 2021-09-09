<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$suma = $n1 + $n2;
$resta = $n1 - $n2;
$producto = $n1 * $n2;
if ($n2 == 0) {
    $division = "No se puede dividir por cero";
} else {
    $division = $n1 / $n2;
}

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado</h1>
        <?php echo "<p>La suma $n1 + $n2 = $suma</p>"; ?>
        <?php echo "<p>La resta $n1 + $n2 = $resta</p>"; ?>
        <?php echo "<p>El producto $n1 * $n2 = $producto</p>"; ?>
        <?php echo "<p>El cociente $n1 / $n2 = $division</p>"; ?>
        <?php echo "<p> La raiz cuadrada de $n1 es ". sqrt($n1) ?>
        <?php echo "<p> La raiz cuadrada de $n2 es  ". sqrt($n2) ?>
    </body>
</html>
