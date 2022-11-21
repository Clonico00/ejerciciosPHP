<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3 Formularios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action ="validarFormulario.php" method = "POST">
        <p>
            <label for = "email">Email</label>
            <input name = "email" type = "text"/>      
        </p>
        <p>
            <label for = "clave">Contraseña</label>
            <input name ="clave" type = "password"/>  
        </p>
        <input type ="submit" value =" enviar"/>
    </form>
</body>

</html>