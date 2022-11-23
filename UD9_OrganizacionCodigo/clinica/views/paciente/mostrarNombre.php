<h2>Mi Paciente</h2>
<?php
foreach ($pacienteConNombre as $fila) {
    foreach ($fila as $campo => $valor) {
        echo "$campo: $valor<br> <br>";
    }
}

