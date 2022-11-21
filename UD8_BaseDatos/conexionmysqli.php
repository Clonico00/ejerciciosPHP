<?php
$servername = "localhost"; // Nombre/IP del servidor
$database = "empresa"; // Nombre de la BBDD
$username = "admin"; // Nombre del usuario
$password = "admin123"; // Contraseña del usuario
$conexion = @new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die ("Error en conexión base datos: " . $conexion->connect_error);
} else {
    echo "<h2>Conexión realizada correctamente</h2>";
    $sql = "SELECT * FROM usuarios";
    $query = $conexion->query($sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = $query->fetch_assoc()) {
            echo "Codigo: " . $row["codigo"] . " , Nombre: " . $row["nombre"] . " , Rol: " . $row["rol"] . "<br>";
        }
    } else {
        echo "No hay registros";
    }
    //insertar datos
    $sql = "INSERT INTO usuarios VALUES(null,'Mateo','mateo123',3);";
    $insert = $conexion->query($sql);
    if ($insert) {
        echo 'Datos insertados correctamente';
    } else {
        echo "Error: ".$conexion->connect_error;
    }
    //borrar datos
    $sql = "DELETE FROM usuarios WHERE nombre='Mateo'";
    $delete = $conexion->query($sql);
    if ($delete) {
        echo 'Datos borrados correctamente';
    } else {
        echo "Error: ".$conexion->connect_error;
    }
}

