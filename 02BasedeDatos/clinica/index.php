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
use Models\Doctor;
use Lib\BaseDatos;

$doctor = new Doctor(1, 'Juan', 'Perez', '123456789', 'Cardiología');
$paciente = new Paciente(1, 'Jose', 'Ruiz', 'joseruiz@gmail.com','123456');

$conexion = new BaseDatos();
$conexion->conectar();

$pacientes= $paciente->consultarTodos();

foreach ($pacientes as $paciente){
    echo $paciente['nombre']." ".$paciente['apellidos']."<br>";
}

?>
</body>
</html>