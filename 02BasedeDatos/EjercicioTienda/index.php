<?php
$servername = "localhost";
$database = "mistiendas";
$username = "admin";
$password = "admin123";
try {
    $conexion = @new mysqli($servername, $username, $password, $database);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio Tienda</title>
    </head>
    <body>
    <h3>Ejercicio: Conjunto de resultados en MySQLi</h3>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label>Producto: </label>
            <select name="productos">
                <?php
                try {
                    $sql = "SELECT * FROM mistiendas.productos";
                    $query = $conexion->query($sql);
                    if (mysqli_num_rows($query) > 0) {
                        while ($row = $query->fetch_assoc()) {
                            ?>
                            <option><?php echo $row["nombre_corto"]; ?></option>
                            <?php
                        }
                    } else {
                        echo "No hay registros";
                    }
                } catch (mysqli_sql_exception $exception) {
                    die ("Error en conexión base datos: " . $exception->getMessage());

                }
                ?>
            </select>
            <input type="submit" value="Mostrar stock"/>
        </p>
    </form>
    <hr>
    </body>
    </html>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h3>Stock</h3>";
        try {
            $producto = $_POST['productos'];
            echo "<p>Producto: " . $producto . "</p>";
            $sql = "SELECT mistiendas.tiendas.nombre, mistiendas.stock.unidades FROM mistiendas.tiendas INNER JOIN mistiendas.stock ON mistiendas.tiendas.cod=mistiendas.stock.tienda
                    WHERE stock.producto=(SELECT mistiendas.productos.cod FROM mistiendas.productos where mistiendas.productos.nombre_corto ='$producto')";
            $query = $conexion->query($sql);
            if (mysqli_num_rows($query) > 0) {
                while ($row = $query->fetch_assoc()) {
                    ?>
                    <p>Tienda: <?php echo $row["nombre"]; ?> , Unidades: <?php echo $row["unidades"]; ?></p>
                    <?php
                }
            } else {
                echo "No hay registros";
            }
        } catch (mysqli_sql_exception $exception) {
            die ("Error en conexión base datos: " . $exception->getMessage());

        }
    }
} catch (mysqli_sql_exception $e) {
    die ("Error en conexión base datos: " . $e->getMessage());
}

