<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio FPDF</title>
</head>
<body>
<form action='datos.php' method='post' enctype="multipart/form-data">
    <p>
        <label><b>Nombre</b></label>
        <input name="nombre" type="text" required/>
    </p>
    <p>
        <label> <b>Apellido</b></label>
        <input name="apellido" type="text" required/>
    </p>
    <input type="submit" value="Guardar datos"/>
</form>
<br>
</body>
</html>

