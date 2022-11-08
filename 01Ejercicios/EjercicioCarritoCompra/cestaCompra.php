<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tu cesta</title>
</head>
<body>
<h1>Tu carrito de la compra</h1>
<?php
session_start();
if (isset($_SESSION["productosEnCesta"])) {
    echo "<table border='1'>";
    echo "<tr><th>Producto</th><th>Cantidad</th></tr>";
    foreach ($_SESSION["productosEnCesta"] as $producto => $cantidad) {
        echo "<tr><td>$producto</td><td>$cantidad</td></tr>";
    }
    echo "</table>";
}
?>
<br>
<hr>
<a href="index.php">Continuar comprando</a>
</body>
</html>
