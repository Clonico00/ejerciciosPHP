<?php

function crearUsuarios()
{
    $fichero = "profesores.txt";
    if (!file_exists($fichero)) {
        $fichero = fopen($fichero, "w");
        $usuarios = array(
            array("usuario" => "Javier", "pw" => "Javier1234!", "NRP" => "123456a", "nombre" => "Javier", "apellido1" => "Martinez", "apellido2" => "Garcia", "correo" => "javier@gmail.com"),
            array("usuario" => "Pepe", "pw" => "Pepe1234!", "NRP" => "123457b", "nombre" => "Pepe", "apellido1" => "Ruiz", "apellido2" => "Porcel", "correo" => "pepe@gmail.com"),
            array("usuario" => "Juan", "pw" => "Juan1234!", "NRP" => "123458c", "nombre" => "Juan", "apellido1" => "Gonzalez", "apellido2" => "Tejada", "correo" => "juan@gmail.com")
        );
        foreach ($usuarios as $usuario) {
            fwrite($fichero, $usuario["usuario"] . "," . $usuario["pw"] . "," . $usuario["NRP"] . "," . $usuario["nombre"] . "," . $usuario["apellido1"] . "," . $usuario["apellido2"] . "," . $usuario["correo"] .",". PHP_EOL);
        }
        fclose($fichero);
    }
}
crearUsuarios();
function login($usu, $pw)
{
    $fichero = "profesores.txt";
    if (file_exists($fichero)) {
        $fichero = fopen($fichero, "r");
        while (!feof($fichero)) {
            $linea = fgets($fichero);
            $datos = explode(",", $linea);
            if ($datos[0] == $usu && $datos[1] == $pw) {
                return true;
            }
        }
        fclose($fichero);
    }
    return false;
}

function crearFondos()
{
    $fondos = array(
        array("ISAN" => "1234567890123", "titulo" => "El señor de los anillos", "director" => "Peter Jackson", "genero" => "Fantasia", "año" => "2001"),
        array("ISAN" => "1234567890124", "titulo" => "Vengadores", "director" => "Peter Jackson", "genero" => "Fantasia", "año" => "2002"),
        array("ISAN" => "1234567890125", "titulo" => "Avatar", "director" => "Peter Jackson", "genero" => "Fantasia", "año" => "2003"),
        array("ISAN" => "1234567890126", "titulo" => "Nemo", "director" => "Peter Jackson", "genero" => "Fantasia", "año" => "2004"),
        array("ISAN" => "1234567890127", "titulo" => "Malditos bastardos", "director" => "Peter Jackson", "genero" => "Fantasia", "año" => "2005"),
    );
    return $fondos;
}

function ordenarFondos($fondos)
{
    $ordenado = false;
    while (!$ordenado) {
        $ordenado = true;
        for ($i = 0; $i < count($fondos) - 1; $i++) {
            if ($fondos[$i]["titulo"] > $fondos[$i + 1]["titulo"]) {
                $aux = $fondos[$i];
                $fondos[$i] = $fondos[$i + 1];
                $fondos[$i + 1] = $aux;
                $ordenado = false;
            }
        }
    }
    return $fondos;
}
function mostrarFondos($fondos)
{
    $tabla = "<table border='1'>";
    $tabla .= "<tr><th>ISAN</th><th>Titulo</th><th>Director</th><th>Genero</th><th>Año</th></tr>";
    foreach ($fondos as $fondo) {
        $tabla .= "<tr>";
        $tabla .= "<td>" . $fondo["ISAN"] . "</td>";
        $tabla .= "<td>" . $fondo["titulo"] . "</td>";
        $tabla .= "<td>" . $fondo["director"] . "</td>";
        $tabla .= "<td>" . $fondo["genero"] . "</td>";
        $tabla .= "<td>" . $fondo["año"] . "</td>";
        $tabla .= "</tr>";
    }
    $tabla .= "</table>";
    return $tabla;
}
function buscarFondo($fondos, $titulo)
{
    $tabla = "<table border='1'>";
    $tabla .= "<tr><th>ISAN</th><th>Titulo</th><th>Director</th><th>Genero</th><th>Año</th></tr>";
    foreach ($fondos as $fondo) {
        if ($fondo["titulo"] == $titulo) {
            $tabla .= "<tr>";
            $tabla .= "<td>" . $fondo["ISAN"] . "</td>";
            $tabla .= "<td>" . $fondo["titulo"] . "</td>";
            $tabla .= "<td>" . $fondo["director"] . "</td>";
            $tabla .= "<td>" . $fondo["genero"] . "</td>";
            $tabla .= "<td>" . $fondo["año"] . "</td>";
            $tabla .= "</tr>";
        }
    }
    $tabla .= "</table>";
    return $tabla;
}

function addProfesor($usuario, $pw, $NRP, $nombre, $apellido1, $apellido2, $correo){
    
        $fichero2 = "profesores.txt";
        if (file_exists($fichero2)) {
            $fichero3 = fopen($fichero2, "r");
            while (!feof($fichero3)) {
                $linea = fgets($fichero3);
                $datos = explode(",", $linea);
                if (!empty($datos[2]) and $datos[2] == $NRP ) {
                    return false;
                }
            }
            fclose($fichero3);
        }
        $fichero = fopen($fichero2, "a");
        fwrite($fichero, $usuario . "," . $pw . "," . $NRP . "," . $nombre . "," . $apellido1 . "," . $apellido2 . "," . $correo .",". PHP_EOL);
        fclose($fichero);
        return true;
    
    
}
function comprobarNombre($nombre){
    $nombre = trim($nombre);
    $nombre = stripslashes($nombre);
    $nombre = htmlspecialchars($nombre);
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
        return false;
    }else{
        return true;
    }
}
function comprobarCorreo($correo){
    $correo = trim($correo);
    $correo = stripslashes($correo);
    $correo = htmlspecialchars($correo);
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        return false;
    }else{
        return true;
    }
}

function comprobarPassword($pw){
    $pw = trim($pw);
    $pw = stripslashes($pw);
    $pw = htmlspecialchars($pw);
    $mayuscula = false;
    $digito = false;
    $especial = false;
    if(strlen($pw) >= 7){
        for($i = 0; $i < strlen($pw); $i++){
            if(ctype_upper($pw[$i])){
                $mayuscula = true;
            }
            if(is_numeric($pw[$i])){
                $digito = true;
            }
            if($pw[$i] == "#" || $pw[$i] == "!" || $pw[$i] == "@" || $pw[$i] == "*" || $pw[$i] == "$"){
                $especial = true;
            }
        }
        if($mayuscula && $digito && $especial){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}








