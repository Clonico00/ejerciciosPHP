<?php
if (isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"];
    $contador++;
    setcookie("contador", $contador, time() + 3600);
    echo "Bienvenido por $contador vez";
} else {
    setcookie("contador", 1, time() + 3600);
    echo "Bienvenido por primera vez";
}
echo "<br><a href='borrar_cookie.php'>Borrar cookie</a>";



