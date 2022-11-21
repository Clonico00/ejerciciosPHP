<?php
session_start();
if (isset($_POST['enviar'])) {
    if (isset($_POST['usuario']) && isset($_POST['password'])) {
        if ($_POST['usuario'] == 'admin' && $_POST['password'] == 'admin') {
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['password'] = $_POST['password'];
            if (isset($_POST['recordar'])) {
                setcookie('usuario', $_POST['usuario'], time() + 60 * 60 * 24 * 365);
                setcookie('password', $_POST['password'], time() + 60 * 60 * 24 * 365);
            }
            header('Location: inicio.php');
        } else {
            echo "<h2>Usuario o contraseña incorrectos</h2>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="<?php if (isset($_COOKIE['usuario'])) {
            echo $_COOKIE['usuario'];
        } ?>">
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" value="<?php if (isset($_COOKIE['password'])) {
            echo $_COOKIE['password'];
        } ?>">
        <br>
        <input type="checkbox" name="recordar" id="recordar" <?php if (isset($_COOKIE['usuario'])) {
            echo 'checked';
        } ?>>
        <label for="recordar">Recordar usuario</label>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

