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

    $sql = "SELECT * FROM usuarios WHERE usuarios.nombre = :usuario AND usuarios.clave = :password";
    $query = $conexion->prepare($sql);
    $query->bindParam(':usuario', $_POST['usuario']);
    $query->bindParam(':password', $_POST['password']);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo "Login correcto";
    } else {
        echo "Login incorrecto";
    }
    
}