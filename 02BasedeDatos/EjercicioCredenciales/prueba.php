<?php
require_once 'lib/conexion.php';

$conexion = new Conexion("localhost","admin","admin123","empresa");
$conexion->conectar();
