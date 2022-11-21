<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Videoteca</title>
</head>

<body>
<hr>
    <h1 style='color: #1991E7'>Videoteca</h1>
    <h2 style='color: #1991E7'>Coleccion de fondos</h2>
    <h3 style='color: #1991E7'>Buscar pelicula por titulo</h3>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>

        <input type='text'   name='nombre'>
        <input type='submit' name='Buscar' value='Buscar'>
        <br>
        <br>


    </form>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>

        <input type='submit' name='mostrar' value='Mostrar todos los fondos'>
        <br>
        <br>
    </form>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>

        <input type='submit' name='mostrarOrdenado' value='Ver listado completo ordenado por titulo'>
        <br>
        <br>
    </form>
<hr>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "datos.php";
    $fondos = crearFondos();

    if(isset($_POST["Buscar"])){
        if($_POST["nombre"] != ""){
            $mostrar = buscarFondo($fondos, $_POST["nombre"]);
            echo $mostrar;
        }else {
            echo "No se ha introducido ningun titulo";
        }
    }
    if (isset($_POST['mostrar'])) {
        $mostrar = mostrarFondos($fondos);
        echo $mostrar;
    }
    if (isset($_POST['mostrarOrdenado'])) {
        $mostrar = ordenarFondos($fondos);
        $mostrarOrdenado = mostrarFondos($mostrar);
        echo $mostrarOrdenado;
    }
}
?>