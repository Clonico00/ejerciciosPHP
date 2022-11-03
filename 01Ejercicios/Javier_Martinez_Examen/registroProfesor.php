<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Registro</title>
</head>

<body>
    <h1>Registro Profesor</h1>
    <div class="formularios">

        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
            <br>
            <label for='usuario'>Usuario</label>
            <input type='text' name='nombre'>
            <br>
            <br>

            <label for='password'>Contraseña</label>
            <input type='password' name='password'>
            <br>
            <br>

            <label for='nrp'>NRP</label>
            <input type='text' name='nrp'>
            <br>
            <br>

            <label for='nombre'>Nombre</label>
            <input type='text' name='nombre'>
            <br>
            <br>

            <label for='apellido1'>Primer Apellido</label>
            <input type='text' name='apellido1'>
            <br>
            <br>

            <label for='apellido2'>Segundo Apellido</label>
            <input type='text' name='apellido2'>
            <br>
            <br>

            <label for='correo'>Correo</label>
            <input type='email' name='correo'>
            <br>
            <br>

            <input type='submit' name='registrar' value='Registrar' style="  margin:  0.5em;">
            <br>
        </form>
    </div>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "datos.php";

    if (isset($_POST["registrar"])) {
        if (!empty($_POST["usuario"]) || !empty($_POST["password"]) || !empty($_POST["nrp"]) || !empty($_POST["nombre"]) || !empty($_POST["apellido1"]) || !empty($_POST["apellido2"]) || !empty($_POST["correo"])) {
            if (comprobarNombre($_POST["nombre"]) && comprobarNombre($_POST["apellido1"]) && comprobarNombre($_POST["apellido2"])) {
                if(comprobarPassword($_POST["password"])){
                    if(comprobarCorreo($_POST["correo"])){
                        if (!addProfesor($_POST["nombre"], $_POST["password"], $_POST["nrp"], $_POST["nombre"], $_POST["apellido1"], $_POST["apellido2"], $_POST["correo"])) {
                            echo "No se ha podido registrar, compruebe que el NRP no este repetido";
                        } else {
                            echo "Se ha registrado correctamente, si quiere iniciar sesion pulse <a href='indexLogin.html'>aqui</a>";
                        }
                    }else{
                        echo "El correo no es valido";
                    }
                }else{
                    echo "La contraseña debe tener al menos 7 caracteres, una mayuscula, un numero y uno de los siguientes caracteres #!@*$";
                }
            }else{
                echo "No se ha podido registrar, compruebe que los campos de nombre y apellidos no contengan caracteres especiales";
            }
        } else {
            echo "No se han introducido todos los datos";
        }
    } else {
        echo "No se ha podido registrar el profesor";
    }
}

?>