<h2>Mi Paciente</h2>
<?php
foreach ($pacienteConNombre as $fila) {
    echo "Id: ".$fila ['id']."<br>";
    echo "Nombre: " . $fila['nombre'] . "<br>";
    echo "Apellidos: " . $fila['apellidos'] . "<br>";
    echo "Email: " . $fila['correo'] . "<br>";
    echo "Password: " . $fila['password'] . "<br>";
}
