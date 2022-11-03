<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Formulario con archivos</h1>
    Nuevo Contacto: <?php echo $_POST['nombre'] . "<br>"; ?>

    Correo electronico: <?php echo $_POST['correo'] . "<br>"; ?>

    Fichero recibido:<br>
    Nombre: <?= $_FILES['foto']['name'] . "<br>" ?>
    Tamaño: <?= $_FILES['foto']['size'] . "<br>" ?>
    Temporal: <?= $_FILES["foto"]['tmp_name'] . "<br>" ?>
    Tipo: <?= $_FILES['foto']['type'] . "<br>" ?>
    Error: <?= $_FILES['foto']['error'] . "<br>" ?>

    <?php
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $nombreDirectorio = "img/";
        $nombreFichero = $_FILES['foto']['name'];

        $nombreCompleto = $nombreDirectorio . $nombreFichero;
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
        }
        move_uploaded_file($_FILES["foto"]["tmp_name"], $nombreDirectorio . $nombreFichero);
    } else {
        print("no se ha podido subir el fichero");
    }
    ?>

</body>
</html>