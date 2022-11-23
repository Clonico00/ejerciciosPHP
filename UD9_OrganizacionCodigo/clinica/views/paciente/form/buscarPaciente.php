<?php
require_once 'autoloader.php';
require_once 'config/config.php';
require_once 'views/layout/header.php';

echo "<h3>Buscar pacientes por su nombre</h3>";
echo "<form action='indexFrontController.php?controller=Paciente&action=buscarNombre' method='post'>";
echo "<label for='nombre'>Nombre: </label>";
echo "<input type='text' name='nombre' id='nombre' required>";
echo "<input type='submit' value='Buscar'>";
echo "</form>";