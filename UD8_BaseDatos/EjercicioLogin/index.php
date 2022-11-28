<?php
require_once 'autoloader.php';
require_once 'config/config.php';
require_once 'views/layout/header.php';
require_once 'controllers/FrontController.php';


use \Controllers\FrontController;

frontController::main();
?>

<form action="index.php?controller=Usuario&action=login" method="post">
    <label for="nombre">Usuario</label>
    <input type="text" name="usuario" id="usuario">


    <label for="apellidos">Contraseña</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Login">
</form>

<a href="views/registro.php">Registrarse</a>









