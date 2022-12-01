<form action="index.php?controller=Usuario&action=login" method="post">
    <label for="nombre">Usuario</label>
    <input type="text" name="usuario" id="usuario">


    <label for="apellidos">Contraseña</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Login">
</form>

<a href="views/registro.php">Registrarse</a>
<br>
<a href="index.php?controller=Usuario&action=borrar">Borrar Usuario</a>
<br>
<a href='views/modificar.php'>Modificar datos</a>
<br>
<a href="index.php?controller=Usuario&action=admin">Ir a la pagina de administrador</a>
