<?php
move_uploaded_file ($_FILES["foto"] ["tmp_name"], "images/" . $_FILES["foto"] ["name"]);
$fichero = fopen("datos.txt", "a");
fwrite($fichero, $_POST["nombre"] . ",");
fwrite($fichero, $_POST["apellido"] . ",");
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



