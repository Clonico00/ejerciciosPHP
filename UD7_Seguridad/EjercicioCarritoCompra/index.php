<!DOCTYPE html>
<html>
<head>
    <title>Carrito compra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Carrito de la compra</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    <p>
        <label>Producto</label>
        <input type="text" name="producto">
    </p>
    <p>
        <label>Cantidad</label>
        <select name="cantidad">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </p>
    <input type="submit" value="Añadir al carrito"/>
</form>
<br>
<form action="cestaCompra.php" method="post">
    <input type="submit" value="Comprar"/>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    if (isset($_POST["producto"]) && isset($_POST["cantidad"])) {
        if (isset($_SESSION["productosEnCesta"][$_POST["producto"]])) {
            $_SESSION["productosEnCesta"][$_POST["producto"]] += $_POST["cantidad"];
        } else {
            $_SESSION["productosEnCesta"][$_POST["producto"]] = $_POST["cantidad"];
        }
    }
}
?>
