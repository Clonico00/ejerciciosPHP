<?php
setcookie("contador", "", time() - 3600);
echo "Cookie borrada";
echo "<br><a href='contador_visitas.php'>Volver</a>";
