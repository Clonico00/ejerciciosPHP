<h2>MIS PACIENTES</h2>
<?php
foreach ($todos_mis_pacientes as $fila) {
    foreach ($fila as $campo => $valor) {
        echo "$campo: $valor<br> <br>";
    }
}
