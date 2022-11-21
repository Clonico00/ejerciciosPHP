<!DOCTYPE html>
<html>
<head>
    <title>Formularios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Datos del formulario saneado y validado</h1>
    <?php 
    
    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    echo $nombre;
    ?>
    <br>
    <?php 
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("ERROR: $email NO es una dirección de email válida");
    } 
    ?>
    <br>
    <?php 
    $url = $_POST["url"];
    $url = filter_var($url, FILTER_SANITIZE_URL);
    echo $url;
    ?>
</body>

</html>