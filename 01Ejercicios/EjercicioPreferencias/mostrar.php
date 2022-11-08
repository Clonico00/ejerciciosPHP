
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
    <?php
    session_start();
    if (isset($_SESSION["idioma"]) && isset($_SESSION["perfil"]) && isset($_SESSION["zonaHoraria"])) {
        echo "<p>Idioma: " . $_SESSION["idioma"] . "</p>";
        echo "<p>Perfil publico: " . $_SESSION["perfil"] . "</p>";
        echo "<p>Zona horaria: " . $_SESSION["zonaHoraria"] . "</p>";
    } else {
        echo "<p>Idioma: </p>";
        echo "<p>Perfil publico: </p>";
        echo "<p>Zona horaria: </p>";
    }
    ?>
    <input type="submit" value="Borrar preferencias" name="Borrar">
</form>
<hr>
<a href="preferencias.php">Establecer preferencias</a>
</body>
</html>
<?php
session_destroy();
echo"<br>";
echo"<br>";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Informacion de la sesion borrada";
    if(isset($_POST["Borrar"])){

    }
}