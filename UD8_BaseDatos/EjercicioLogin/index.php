<?php
require_once 'autoloader.php';
require_once 'config/config.php';
require_once 'views/layout/header.php';
require_once 'controllers/FrontController.php';


use \Controllers\FrontController;

frontController::main();


if (!isset($_COOKIE['intentos'])) {
    setcookie('intentos', 1, time() + 120);
} else {
    setcookie('intentos', $_COOKIE['intentos'] + 1, time() + 120);
}

if (isset($_SESSION['admin']) && $_SESSION['admin']) {
    echo "<br>";
    echo "<a href='indexAdmin.php'>Ir a la pagina de administrador</a>";
}

require_once 'views/layout/footer.php';













