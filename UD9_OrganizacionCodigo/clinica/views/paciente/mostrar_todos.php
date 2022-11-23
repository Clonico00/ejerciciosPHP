<h2>Mis Pacientes</h2>
<?php
foreach ($todos_mis_pacientes as $fila) {
    echo "<br>";
    echo "Id: ".$fila ['id']."<br>";
    echo "Nombre: " . $fila['nombre'] . "<br>";
    echo "Apellidos: " . $fila['apellidos'] . "<br>";
    echo "Email: " . $fila['correo'] . "<br>";
    echo "Password: " . $fila['password'] . "<br>";
}

