<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$suma = $n1 + $n2;
$producto = $n1 * $n2;
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
        <?php echo "<p>El producto $n1 * $n2 = $producto</p>"; ?>
    </body>
</html>
