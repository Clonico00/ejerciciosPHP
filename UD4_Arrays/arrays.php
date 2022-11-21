<?php
echo "Ejercicio 1<br>";
echo "Escribe un script que almacene un array de 8 números enteros:<br>
     a.recorrerá el array y lo mostrará<br>
     b.lo ordenará y lo mostrará<br>
     c.mostrará su longitud<br>
     d.buscará un elemento dentro del array<br>
     e.buscará un elemento dentro del array, pero por el parámetro que llegue a la URL<br>
     Para mostrar los elementos del array en cada uno de los apartados se creará una función llamada mostrarArray().<br>";

function mostrarArray($array){
    foreach ($array as $value) {
        echo $value."  ";
        
    }
    echo "<br>";
    rsort($array);
    foreach ($array as $value) {
        echo $value."  ";
      
    }
    echo "<br>";
    echo "Lomgitus del array: ".count($array);
    echo "<br>";
    foreach ($array as $value) {
        if($value == 766){
            echo "He buscado el ".$value."  ";
        }        
    }
}
$array[] = 111;
$array[] = 452;
$array[] = 333;
$array[] = 988;
$array[] = 599;
$array[] = 766;
$array[] = 237;
$array[] = 998;

mostrarArray($array);