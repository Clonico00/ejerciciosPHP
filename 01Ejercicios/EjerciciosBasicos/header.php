<?php
header("Cache-Control: no-cache, must-revalidate");
header("Refresh: 10; $_SERVER[PHP_SELF]");
echo "<h1>Fecha actual: " . date("d/m/Y H:i:s") . "</h1>";
echo "<br>";
echo "<b>Con la funcion header() hemos especfificado que esta pagina no se guarde en la memoria cache, sino
 que se llame a si mismadesde la pagina original cada 10 segundos. Puede comprobarse dejando la pagina 
 sin actualizar durante 10 segundos o pulsando sobre actualizar</b>";

