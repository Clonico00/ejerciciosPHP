<?php

$entero = 3;
$numero = 2.3;
$cadena = "cadena";
$bool = true;
$a = 5;


echo gettype($a);
echo "<br>";

$a = "Hola";
echo gettype($a);
echo "<br>";

$resultado = $entero + (int)$numero;
echo gettype($resultado);
echo (" " . $resultado);
echo "<br>";


echo "ip servidor: " . $_SERVER['SERVER_ADDR'] . '<br>';
echo "nombre servidor: " . $_SERVER['SERVER_NAME'] . '<br>';
echo "software servidor  : " . $_SERVER['SERVER_SOFTWARE'] . '<br>';
echo "ruta htdocs : " . $_SERVER['PHP_SELF'] . '<br>';
echo "mi navegador: " . $_SERVER['HTTP_USER_AGENT'] . '<br>';

$b = "hola";
$$b = "mundo";

echo "$b ${$b}";
echo "<br>";
$num_float = 34.0;
echo '<br>' . "la salida usando la funcion echo es : $num_float <br>";
echo "salida utilizando printf(): ";
printf(" %.2f ", " $num_float");

$nombre = "ana";
echo '<br>hola mi nombre es $nombre <br>';
echo "hola mi nombre es $nombre<br>";
echo "hola mi \"nombre\" es $nombre";



$arrayy[] = 1;
$arrayy[] = 2;
$arrayy[] = 3;
$arrayy[12] = "hola";
$arrayy[] = 4;


echo '<br>imprimiendo con print_r: ';
print_r($arrayy);
echo '<br>imprimiendo con var_dump: ';
var_dump($arrayy);
phpinfo();
