<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Varios Usuarios</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="usuario">Usuario: </label>
    <input type="text" name="usuario" id="usuario" required>
    <br>
    <br>
    <label for="password">Contraseña: </label>
    <input type="password" name="password" id="password" required>
    <br>
    <br>
    <input type="submit" value="Iniciar sesion" name="iniciarSesion">
</form>
</body>
</html>

