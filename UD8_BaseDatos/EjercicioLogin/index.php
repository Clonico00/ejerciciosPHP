<?php
require_once 'autoloader.php';
require_once 'config/config.php';
require_once 'views/layout/header.php';
require_once 'controllers/FrontController.php';


use \Controllers\FrontController;

frontController::main();

/*comprobamos en la variable de session si el usuario es admin y de ser asi mostrar un enlace a la pagina indexAdmin.php*/
if (isset($_SESSION['admin']) && $_SESSION['admin']) {
    echo "<br>";
    echo "<a href='indexAdmin.php'>Ir a la pagina de administrador</a>";
}

require_once 'views/layout/footer.php';













