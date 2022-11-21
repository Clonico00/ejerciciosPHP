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

$bd = new BaseDatos();
$bd->consulta("SELECT * FROM miclinica.pacientes");
$listaPacientes = $bd->extraer_todos();

foreach ($listaPacientes as $paciente) {
    $paciente = new Paciente($paciente['id'], $paciente['nombre'], $paciente['apellidos'], $paciente['correo'], $paciente['password']);
    echo "<p>Nombre: {$paciente->getNombre()} {$paciente->getApellidos()}</p>";
    echo "<p>Email: {$paciente->getEmail()}</p>";
    echo "<p>Contraseña: {$paciente->getPassword()}</p>";
    echo "<hr>";
}


?>
</body>
</html>