<?php
/*
PHP script that:

Store 20 random values ​​between 0 and 100 in an array.
In a second array, called squares, you should store the squares of the values ​​that are in the first array.
In a third array, called cube, the cubes of the values ​​that are in the first array must be stored.
Finally, the content of the three arrays arranged in three parallel columns will be displayed.*/
$random = array();
$squares = array();
$cube = array();
for ($i = 0; $i < 20; $i++) {
    $random[$i] = rand(0, 100);
    $squares[$i] = $random[$i] * $random[$i];
    $cube[$i] = $random[$i] * $random[$i] * $random[$i];
}
echo "<table border='1'>";
echo "<tr><th>Random</th><th>Squares</th><th>Cube</th></tr>";
for ($i = 0; $i < 20; $i++) {
    echo "<tr><td>" . $random[$i] . "</td><td>" . $squares[$i] . "</td><td>" . $cube[$i] . "</td></tr>";
}
echo "</table>";
?>
