<?php
$fichero = fopen("datos.txt", "a");
fwrite($fichero, "Nombre: ".$_POST["nombre"] . "\n");
fwrite($fichero, "Apellido: ".$_POST["apellido"] . "\n");
fclose($fichero);
echo "Datos guardados en el fichero datos.txt";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio FPDF</title>
</head>
<body>
<p>Datos guardados correctamente, pulse el siguiente boton si quiere ver el PDF con todos los datos</p>
<form action='pdf.php' method='post' enctype="multipart/form-data">
    <input type="submit" value="Ver Datos"/>
</form>
</body>
</html>



