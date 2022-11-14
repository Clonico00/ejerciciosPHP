<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Tienda</title>
</head>
<body>
<h3>Ejercicio: Login BBDD</h3>
<hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" required>
        <label>Contraseña: </label>
        <input type="password" name="password" required>
        <input type="submit" name="enviar" value="Login">
    </p>
</form>
<hr>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'lib/conexion.php';

    $conexion = new Conexion();
    $conexion->conectar();
    
    
}
?>