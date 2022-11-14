<?php
/*Comprobar si el usuario le ha dado a recordar en el checkbox, de ser asi guardar los datos en una cookie y en los input "usuario" y "password", escribir el usuario y la contraseña pero con "*"*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_COOKIE["usuario"] && isset($_POST['cbox1'])) {
        setcookie("usuario", $_POST['usuario'], time() + 60 * 60 * 24 * 365);
        setcookie("password", $_POST['password'], time() + 60 * 60 * 24 * 365);
        $usuario = str_replace($_COOKIE["usuario"], str_repeat("*", strlen($_COOKIE["usuario"])), $_COOKIE["usuario"]);
        $password = str_replace($_COOKIE["password"], str_repeat("*", strlen($_COOKIE["password"])), $_COOKIE["password"]);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Ejercicio Varios Usuarios</title>
        </head>
        <body>
        <h2>Iniciar Sesion</h2>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="usuario">Usuario: </label>
            <?php echo "<input type='text' name='usuario' value='" . $usuario . "'><br>"; ?>
            <br>
            <br>
            <label for="password">Contraseña: </label>
            <?php echo "<input type='text' name='password' value='" . $password . "'><br>"; ?>
            <br>
            <br>
            <label><input type="radio" name="cbox1"> No cerrar sesion </label><br>
            <br>
            <input type="submit" value="Iniciar sesion" name="iniciarSesion">
        </form>
        <hr>
        <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Iniciar sesion con otra cuenta</a>
        </body>
        </html>
        <?php
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Ejercicio Varios Usuarios</title>
        </head>
        <body>
        <h2>Iniciar Sesion</h2>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario" required>
            <br>
            <br>
            <label for="password">Contraseña: </label>
            <input type="text" name="password" id="password" required>
            <br>
            <br>
            <label><input type="radio" name="cbox1"> No cerrar sesion </label><br>
            <br>
            <input type="submit" value="Iniciar sesion" name="iniciarSesion">
        </form>
        <hr>
        <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Iniciar sesion con otra cuenta</a>
        </body>
        </html>
        <?php
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio Varios Usuarios</title>
    </head>
    <body>
    <h2>Iniciar Sesion</h2>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <br>
        <label for="password">Contraseña: </label>
        <input type="text" name="password" id="password" required>
        <br>
        <br>
        <label><input type="radio" name="cbox1"> No cerrar sesion </label><br>
        <br>
        <input type="submit" value="Iniciar sesion" name="iniciarSesion">
    </form>
    <hr>
    <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Iniciar sesion con otra cuenta</a>
    </body>
    </html>
    <?php
}
?>



