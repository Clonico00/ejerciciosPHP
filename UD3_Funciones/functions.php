<?php
echo "Ejercicio 1<br>";
echo "Escribe una función para calcular el factorial de un número que recibirá como argumento<br>";
function getFactorial($numero)
{
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial = $factorial * $i;
    }
    return $factorial;
}

$numero = 5;
$resultado = getFactorial($numero);
echo "Factorial de $numero  = $resultado <br>";
echo "--------------------------------------------------------------------------<br>";
echo "Ejercicio 2<br>";
echo " a.Escribe una función que nos devuelva el resultado de sumar los dos argumentos que se le pasen como parámetros. 
       Construye igualmente otra para restar, multiplicar y dividir.<br>
       b.Escribe la función calculador. Dicha función recibirá tres parámetros: dos números y el nombre de la operación que 
       desea que se les aplique ( Observa que deben de coincidir con las funciones que hemos diseñado en el apartado anterior). <br>
       Según el nombre de la función que se pase como argumento se devolverá la suma, la resta, la división o la multiplicación de los 
       valores pasados en los otros dos argumentos.<br>";

function sumar($num1, $num2)
{
    return $num1 + $num2;
}
function restar($num1, $num2)
{
    return $num1 - $num2;
}
function multiplicar($num1, $num2)
{
    return $num1 * $num2;
}
function dividir($num1, $num2)
{
    return $num1 / $num2;
}
function  calculadora($num1, $num2, $operacion)
{
    $x = 0;
    switch ($operacion) {
        case "sumar":
            $x = sumar($num1, $num2);
            break;
        case "restar":

            $x = restar($num1, $num2);
            break;
        case "multiplicar":

            $x = multiplicar($num1, $num2);
            break;
        case "dividir":
            if ($num2 == 0 || $num2 < $num1) {
                $x = 0;
                break;
            }
            $x = dividir($num1, $num2);
            break;
        default:

            break;
    }
    return $x;
}
$operacion = "dividir";
$resultado1 = calculadora(5, 0, $operacion);
echo "El resultado de $operacion 5 mas 5 es $resultado1<br>";
echo "--------------------------------------------------------------------------<br>";
echo "Ejercicio 3<br>";
echo "Escribe una función que reciba un argumento.Dicha función comprobará:<br>
        Si el argumento recibido es una cadena de caracteres:<br>
            -en dicho caso, verificará si está vacía y si es así devolverá:   -Este es el relleno porque estaba vacía-<br>
            -Si tiene contenido, devolverá la cadena recibida en mayúscula.<br>
        Si el argumento no es un string devolverá el argumento recibido más el mensaje “no es una cadena de caracteres”.<br>";


function compruebaCadena($cadena)
{
    $y = "";
    if (is_string($cadena)) {
        if (strlen($cadena) != 0) {
            $y = strtoupper($cadena);
        } else {
            $y = "Este es el relleno porque estaba vacía";
        }
    } else {
        $y = "no es una cadena de caracteres";
    }
    return $y;
}
$cadena = "holaaa";
$resultado2 = compruebaCadena($cadena);
echo $resultado2;
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 4<br>";
echo "Escribe una  función para calcular potencias.<br> 
        La función recibe como argumentos la base y el exponente (que es opcional 
        y tiene por defecto el valor 2)<br>";

function calcularPotencias($base, $exponente)
{
    $z = 1;
    if ($exponente == 0) {
        $exponente = 2;
    }
    for ($i = 0; $i < $exponente; $i++) {
        $z = $z * $base;
    }
    return $z;
}
$base = 3;
$exponente = 0;
$resultado3 = calcularPotencias($base, $exponente);
echo $resultado3;
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 5<br>";
echo "Función que nos devuelve la fecha de hoy en castellano<br>";
function fecha()
{
    date_default_timezone_set('Europe/Madrid');
    $num_mes = date("m");
    $num_semana = date("N");
    $anio = date("Y");
    $num_dia_mes = date("n");
    $fecha = "";
    switch ($num_mes) {
        case 1:
            $mes = "enero";
            break;
        case 2:
            $mes = "febrero";
            break;
        case 3:
            $mes = "marzo";
            break;
        case 4:
            $mes = "abril";
            break;
        case 5:
            $mes = "mayo";
            break;
        case 6:
            $mes = "junio";
            break;
        case 7:
            $mes = "julio";
            break;
        case 8:
            $mes = "agosto";
            break;
        case 9:
            $mes = "septiembre";
            break;
        case 10:
            $mes = "octubre";
            break;
        case 11:
            $mes = "noviembre";
            break;
        case 12:
            $mes = "diciembre";
            break;
        default:
            break;
    }
    switch ($num_semana) {
        case 1:
            $dia = "lunes";
            break;
        case 2:
            $dia = "martes";
            break;
        case 3:
            $dia = "miercoles";
            break;
        case 4:
            $dia = "jueves";
            break;
        case 5:
            $dia = "viernes";
            break;
        case 6:
            $dia = "sabado";
            break;
        case 7:
            $dia = "domingo";
            break;
        default:
            break;
    }
    $fecha = $dia . ", " . $num_dia_mes . " de " . $mes . " del " . $anio;
    return $fecha;
}
$fechahoy = fecha();
echo $fechahoy;
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 6<br>";
echo "Escribe una función que calcule el máximo común divisor de dos números y un programa para probarla.<br>";
function maximoComunDivisor($num4, $num5)
{
    $v = 0;
    $v = gmp_gcd($num4, $num5);
    return $v;
}
$num4 = 10;
$num5 = 20;
$maxcomdiv = maximoComunDivisor($num4, $num5);
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 7<br>";
echo "Escribe una función para comprobar si un número es primo y un programa para probarla<br>";
function primo($num6)
{
    for ($i = 2; $i < $num6; $i++) {
        if (($num6 % $i) == 0) {
            return "no es primo";
        }
    }
    return "es primo";
}
$num6 = 997;
$resultado4 = primo($num6);
echo $num6 . " " . $resultado4;
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 8<br>";
echo "Escribe una función que reciba una cadena y comprueba si es una matrícula de coche válida.<br>
      Recuerda que una matrícula tiene siete caracteres, los cuatro primeros números y el resto consonantes mayúsculas.<br>";

function compruebaMatricula($matricula)
{
    if (strlen($matricula) == 7) {
        $numerosMatricula = substr($matricula, 0, 4);
        $letrasMatricula  = substr($matricula, 4);
        

        if (is_numeric($numerosMatricula) and is_string($letrasMatricula)) {
            return 1;
        }
    }
}
$matricula = "4453llm";
$matricula = strtoupper($matricula);
$valido = compruebaMatricula(strtoupper($matricula));
if ($valido == 1) {
    echo $matricula . " es una matricula valida<br>";
} else {
    echo $matricula . " no es matricula no valida<br>";
}
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 9<br>";
echo "Escribe una función que reciba una cadena y comprueba si es una contraseña válida. Hay que comprobar que tenga:<br>

– Entre 6 y 15 caracteres.<br>

 – Al menos un número.<br>

– Al menos una letra mayúscula.<br> 

– Al menos una letra minúscula.<br> 

– Al menos un carácter no alfanumérico.<br>";
$contraseña = '23aaaaaAAAA+';
    function validar_contraseña($contraseña){

        $error_contraseña='';
        if(strlen($contraseña) < 6){
           $error_contraseña = "La contraseña debe tener al menos 6 caracteres";
        }
        if(strlen($contraseña) > 15){
           $error_contraseña = "La contraseña no puede tener más de 16 caracteres";
        }
        if (!preg_match('`[a-z]`',$contraseña)){
           $error_contraseña = "La contraseña debe tener al menos una letra minúscula";
        }
        if (!preg_match('`[A-Z]`',$contraseña)){
           $error_contraseña = "La contraseña debe tener al menos una letra mayúscula";
        }
        if (!preg_match('`[0-9]`',$contraseña)){
           $error_contraseña = "La contraseña debe tener al menos un caracter numérico";
        }
        if (!preg_match('`[!-/]`',$contraseña)){
            $error_contraseña = "La contraseña debe tener al menos un caracter especial";
         }
        if ($error_contraseña===""){
            echo "PASSWORD VÁLIDO";
        }else{
            echo "PASSWORD NO VÁLIDO debido a --> " . $error_contraseña;
        }
     }
     

echo validar_contraseña($contraseña);
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 10<br>";
echo "En el ejercicio 5 se creó una función que nos devolvía la fecha en castellano. 
      Guarda esa función en un archivo y crea una nueva página PHP que incluya este fichero y utilice la función para mostrar en pantalla la<br>
      fecha obtenida. Uso de include.<br>";
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 11<br>";
echo "Modifica el ejercicio cálculo de un factorial para que controle si el argumento es negativo utilizando una excepción.<br>
      Usa: InvalidArgumentException<br>";
echo "<br>--------------------------------------------------------------------------<br>";
echo "Ejercicio 12<br>";
echo "Escribe una función que nos permita duplicar los caracteres de la cadena que recibe como argumento.<br>";