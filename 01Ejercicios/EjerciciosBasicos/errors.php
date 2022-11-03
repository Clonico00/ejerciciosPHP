<?php

function manejandoErrores( $error, $str, $file, $line ){
    echo "Ocurrio el error : $str";
}

set_error_handler("manejandoErrores");
$a = $b;

echo phpinfo();
