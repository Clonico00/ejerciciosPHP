<?php
$servername = "localhost"; // Nombre/IP del servidor
$database = "empresa"; // Nombre de la BBDD
$username = "admin"; // Nombre del usuario
$password = "admin123"; // Contraseña del usuario
try {
// Creamos la conexión
// Para que la conexión a mysql utilice las collation UTF-8 añadir
//charset=utf8 al string de la conexión.
    $conexion = new PDO("mysql:host=$servername;dbname=$database;charset=utf8",
        $username, $password);
//Para que genere excepciones a la hora de reportar errores.
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>Conexión realizada con exito</h2>";
    $ins = $conexion->prepare("INSERT INTO usuarios(nombre, clave, rol) values (?, ?, ?)");
    $ins = $conexion->prepare("INSERT INTO usuarios(nombre, clave, rol) VALUES (:nombre, :clave, :rol)");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
