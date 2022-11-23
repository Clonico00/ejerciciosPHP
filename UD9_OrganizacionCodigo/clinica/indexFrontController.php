<?php
require_once 'autoloader.php';
require_once 'config/config.php';
require_once 'views/layout/header.php';

require_once 'controllers/FrontController.php';

use Controllers\FrontController;

frontController::main();

?>

<nav>
    <ul>
        <li><a href="http://localhost:63342/ejercicios/UD9_OrganizacionCodigo/clinica/indexFrontController.php">Inicio</a></li>
        <li><a href="http://localhost:63342/ejercicios/UD9_OrganizacionCodigo/clinica/indexFrontController.php?controller=Paciente&action=mostrarTodos">Mostrar todos mis pacientes</a></li>
        <li><a href="http://localhost:63342/ejercicios/UD9_OrganizacionCodigo/clinica/indexFrontController.php?controller=Paciente&action=buscarNombre">Buscar pacientes por su nombre</a></li>
    </ul>
</nav>

<?php
require_once 'views/layout/footer.php';
?>
