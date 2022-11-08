<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preferencias</title>
</head>
<body>
    <h3>Preferencias</h3>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label>Idioma: </label>
            <select name="idioma">
                <option value="Ingles">Ingles</option>
                <option value="Español">Español</option>
            </select>
        </p>
        <p>
            <label>Perfil publico: </label>
            <select name="perfil">
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </p>
        <p>
            <label>Zona horaria: </label>
            <select name="zonaHoraria">
                <option value="GMT-2">GMT-2</option>
                <option value="GMT-1">GMT-1</option>
                <option value="GMT">GMT</option>
                <option value="GMT+1">GMT+1</option>
                <option value="GMT+2">GMT+2</option>
            </select>
        </p>
        <input type="submit" value="Establecer preferencias"/>
    </form>
    <hr>
    <a href="mostrar.php">Mostrar preferencias</a>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    if (isset($_POST["idioma"]) && isset($_POST["perfil"]) && isset($_POST["zonaHoraria"])) {
        $_SESSION["idioma"] = $_POST["idioma"];
        $_SESSION["perfil"] = $_POST["perfil"];
        $_SESSION["zonaHoraria"] = $_POST["zonaHoraria"];
    }
    echo"<br>";
    echo"<br>";
    echo "Informacion guardada en la sesion";
}
?>