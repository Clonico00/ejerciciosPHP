<?php

require_once 'datos.php';
if(login($_POST['usuario'],$_POST['clave'])){
    header("Location:muestraFondos.php");
} else {
    header("Location:error.html");
}
