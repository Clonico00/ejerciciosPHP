<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Clinica</title>
</head>
<body>
<h2>Bienvenidos mi clinica</h2>
<?php
require_once 'autoloader.php';
use Models\Paciente;
use Lib\BaseDatos;
use Controllers\PacienteController;

$controlador = new PacienteController;
$controlador->mostrarTodos();


?>
</body>
</html>